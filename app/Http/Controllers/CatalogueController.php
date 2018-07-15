<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Produit;
use App\Models\Marque;
use App\Models\Categorie;
use Illuminate\Support\Facades\Session;

class CatalogueController extends Controller
{
    public function produitAll()
    {
        $catalogue = Produit::paginate(15);
        $marque = Marque::all();
        $categorie = Categorie::all();
        $poduitLastFive = Produit::all()->sortByDesc('id_produit')->take(6);
        return view('client/catalogue',[
            'catalogue' => $catalogue,
            'produitLastFive' => $poduitLastFive,
            'marque' => $marque,
            'categorie' => $categorie,
        ]);
    }

    public function produitById($id)
    {
        $produit = Produit::find($id);

        return view('client/produit', [
            'produit' => $produit
        ]);
    }

    public function produitFiltre(Request $request)
    {
        $this->validate($request, [
            'nom_produit' => 'required',
            'ref_id_marque' => 'required',
            'ref_id_categorie' => 'required',
            'cout' => 'required',
        ]);

        $nom_produit = $request->all()['nom_produit'];
        $ref_id_marque = $request->all()['ref_id_marque'];
        $ref_id_categorie = $request->all()['ref_id_categorie'];
        $cout = $request->all()['cout'];

        $catalogue = Produit::where([
            ['nom_produit', 'like', '%'. $nom_produit .'%'],
            ['ref_id_marque', 'like', '%'. $ref_id_marque .'%'],
            ['ref_id_categorie', 'like', '%'. $ref_id_categorie .'%'],
            ['cout', 'like', '%'. $cout .'%'],
         ])->get();

        return view('client/catalogue',[
            'catalogue' => $catalogue,
        ]);
    }
    public function checkout(Request $request)
    {
        if (isset(request()->all()['produit'])) {
            // Clear array
            $arrayProduits = [];
            unset($arrayProduits);
            $arrayProduits = [];
            // End clear
            // Get datas
            $cout= request()->all()['cout'];
            $idProduit = $request->all()['produit'];
            $quantite = $request->all()['quantite'];
            $nomProduit = $request->all()['nom'];
            // End get datas
            // Put values in an array
            $arrayProduits['idProduit'] = $idProduit;
            $arrayProduits['cout'] = $cout;
            $arrayProduits['quantite'] = $quantite;
            $arrayProduits['nom'] = $nomProduit;
            // End put values in an array
            // If Session produits doesn't exist

            if(empty(Session::get('produits'))) {
                $request->session()->push('produits', $arrayProduits);
            }
            // Else check if duplicate, then push
            else {
                $exist = false;
                $allProduit = Session::all()['produits'];
                foreach ($allProduit as $kSession => $prodSession) {
                    if($prodSession['idProduit'] == $arrayProduits['idProduit']){
                        $prodSession['quantite'] += $arrayProduits['quantite'];
                        $allProduit[$kSession] = $prodSession;
                        $exist = true;
                    }
                }
                if(!$exist){
                    $allProduit[] = $arrayProduits;
                }

                $request->session()->forget('produits');
                foreach ($allProduit as $produit){
                    $request->session()->push('produits',$produit);
                }
            }
            //var_dump(Session::all()['produits']);
            //$request->session()->forget('produits');
            //$request->session()->flush();
            //$request->session()->regenerate();
            if ($request['Commander']) {
                return View('client/commande')->with('commande', '');
            } elseif ($request['Rechercher']) {
                $nom_produit = $request->all()['nom_produit'];
                if (isset($request->all()['ref_id_marque']))
                    $ref_id_marque = $request->all()['ref_id_marque'];
                else
                    $ref_id_marque = "";
                if (isset($request->all()['ref_id_categorie']))
                    $ref_id_categorie = $request->all()['ref_id_categorie'];
                else
                    $ref_id_categorie = "";
                $cout = $request->all()['cout'];
                $marque = Marque::all();
                $categorie = Categorie::all();
                $poduitLastFive = Produit::all()->sortByDesc('id_produit')->take(6);
                $catalogue = Produit::where([
                    ['nom_produit', 'like', '%' . $nom_produit . '%'],
                    ['ref_id_marque', 'like', '%' . $ref_id_marque . '%'],
                    ['ref_id_categorie', 'like', '%' . $ref_id_categorie . '%'],
                    ['cout', 'like', '%' . $cout . '%'],
                ])->paginate(15);
                return view('client/catalogue', [
                    'catalogue' => $catalogue,
                    'produitLastFive' => $poduitLastFive,
                    'marque' => $marque,
                    'categorie' => $categorie,
                ]);
            }
//        else {
//            return response()->json(['success'=>"Ce produit vient d'être ajouté"]);
//        }
        }
    }
}