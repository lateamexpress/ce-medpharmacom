<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Image;
use App\Models\Marque;
use Illuminate\Http\Request;
use App\Models\Produit;
use ZipArchive;

class GestionProduitController extends Controller
{
    public function produitAll()
    {
        $produit = Produit::all();

        return view('admin/gestion-produits', [
            'produit' => $produit
        ]);
    }

    public function produitsAll_And_FiveLast()
    {
        $produitAll = Produit::all();
        $poduitLastFive = Produit::all()->sortByDesc('id_produit')->take(5);

        return view('admin/gestion-produits',[
            'produit' => $produitAll,
            'produitLastFive' => $poduitLastFive
        ]);
    }

    public function produitById($id)
    {
        $produit = Produit::find($id);

        return view('admin/gestion-produits-solo', [
            'produit' => $produit
        ]);
    }

    public function produitAjouter(Request $request)
    {
        Produit::create(Input::all());
        return redirect()->back()->with('flash_message', 'Produit ajouté');
    }

    public function produitModifier(Request $request, $id)
    {
        $produit = Produit::find($id);
        $produit->nom_produit = $request->nom_produit;
        $produit->ref_id_image = $request->ref_id_image;
        $produit->ref_id_categorie = $request->ref_id_categorie;
        $produit->cout = $request->cout;
        $produit->description = $request->description;

        $produit->save();
        return redirect()->back()->with('flash_message', 'Produit modifié');
    }

    public function produitSupprimer($id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        return redirect()->back()->with('flash_message', 'Produit supprimé');
    }

    public function produitAjouterByCSV(Request $request)
    {
        $uploadedFile = $request->file('fileName');
        $fileName = "";
        $pathTmp = '/tmp/product_' . time();
        mkdir($pathTmp);
        $zip = new ZipArchive();
        if ($zip->open($uploadedFile->path()) === TRUE) {
            $zip->extractTo($pathTmp);
            $zip->close();
            foreach (glob($pathTmp . "/*") as $dir) {
                if(pathinfo($dir,PATHINFO_FILENAME) !== "__MACOSX"){
                    $fileName = pathinfo($dir,PATHINFO_FILENAME);
                }
            }
        }
        else{
            throw new \Exception($uploadedFile->path() . " file introuvable.");
        }
        $path = $pathTmp . "/" . $fileName . "/Images/*.*";
        $newpath = "./img/";
        $directory = glob($path);
        foreach($directory as $file){
            $save = explode("/", $file);
            //dump($file);
            //dump(getcwd());exit;
            rename($file, $newpath. end($save));
        }

        $i = 0;
        if (($handle = fopen($pathTmp . "/" . $fileName . "/gabarit.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                if(!$i){
                    $i++;
                    continue;
                }

                $image = Image::where(['nom' => $data[3]])->first();


                if($image=== NULL) {
                    $image = Image::create([
                        'nom' => $data[3],
                        'lien' => $data[3]
                    ]);
                }
                $refIdImage = $image->id_image;


                $marque = Marque::firstOrCreate(['nom_marque' => $data[4]]);
                $refIdMarque = $marque->id_marque;

                $categorie = Categorie::firstOrCreate(['nom_categorie' => $data[5]]);
                $refIdCategorie = $categorie->id_categorie;

                Produit::create([
                    'nom_produit' => $data[0],
                    'cout' => $data[1],
                    'description' => $data[2],
                    'ref_id_image' => $refIdImage,
                    'ref_id_marque' => $refIdMarque,
                    'ref_id_categorie' => $refIdCategorie
                ]);

            }
            fclose($handle);
        }
        return redirect()->back()->with('flash_message', 'Produits ajoutés');
    }

    public function produitFiltre(Request $request)
    {
        $this->validate($request, [
            'produit' => 'required'
        ]);

        $slug = $request->all()['produit'];

        $produit = Produit::where('nom_produit', 'like', '%'. $slug .'%')->get();

        return view('admin/gestion-produits', [
            'produit' => $produit
        ]);
    }
}
