<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Session;

class CatalogueController extends Controller
{
    public function produitAll()
    {
        $catalogue = Produit::paginate(15);
        $poduitLastFive = Produit::all()->sortByDesc('id_produit')->take(5);
        return view('client/catalogue',[
            'catalogue' => $catalogue,
            'produitLastFive' => $poduitLastFive
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

    public function checkout(Request $request) {

        if(isset(request()->all()['arrayProduits'])) {
            $arrayProduits = request()->all()['arrayProduits'];
            foreach ($arrayProduits as $prod) {
                $request->session()->push('produits', $prod);
            }
        }
//        $request->session()->forget();
//        $request->session()->regenerate();
        //$request->session()->flush();
        if($request['Commander']) {
            // TODO il faut recup les values de $arrayProduit mais ça me donne un truc bizarre, ça n'affiche pas les produits...
            return View('client/commande')->with('commande', '');
        }
        else {
            // TODO insert dans la DB chaque produit avec l'id de l'user
            return response()->json(['success'=>"Ce produit vient d'être ajouté"]);
        }
    }
}