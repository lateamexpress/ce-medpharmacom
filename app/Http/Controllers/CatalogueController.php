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
    public function checkout(Request $request) {
        if(isset(request()->all()['arrayProduits'])) {
            $arrayProduits = request()->all()['arrayProduits'];
//            foreach ($arrayProduits as $prod) {
//                $request->session()->push('produits', $prod);
//            }
            $uniqueArray = array_unique($arrayProduits, SORT_REGULAR);
            // TODO NE PUSH QUE LES VALEURS UNIQUES
            var_dump($uniqueArray);
            // TODO ON PUSH DANS LA SESSION SEULEMENT LES VALEURS UNE SEULE FOIS
            foreach ($uniqueArray as $prodUnique) {
                $request->session()->push('produits', $prodUnique);
            }
        }
//        $request->session()->forget();
//        $request->session()->regenerate();
        //$request->session()->flush();
        if($request['Commander']) {
            // TODO il faut recup les values de $arrayProduit mais ça me donne un truc bizarre, ça n'affiche pas les produits...
            return View('client/commande')->with('commande', '');
        }
        elseif ($request['Rechercher']) {
            $nom_produit = $request->all()['nom_produit'];
            if(isset($request->all()['ref_id_marque']))
                $ref_id_marque = $request->all()['ref_id_marque'];
            else
                $ref_id_marque = "";
            if(isset($request->all()['ref_id_categorie']))
                $ref_id_categorie = $request->all()['ref_id_categorie'];
            else
                $ref_id_categorie = "";
            $cout = $request->all()['cout'];
            $marque = Marque::all();
            $categorie = Categorie::all();
            $poduitLastFive = Produit::all()->sortByDesc('id_produit')->take(6);


            $catalogue = Produit::where([
                ['nom_produit', 'like', '%'. $nom_produit .'%'],
                ['ref_id_marque', 'like', '%'. $ref_id_marque .'%'],
                ['ref_id_categorie', 'like', '%'. $ref_id_categorie .'%'],
                ['cout', 'like', '%'. $cout .'%'],
            ])->paginate(15);

            return view('client/catalogue',[
                'catalogue' => $catalogue,
                'produitLastFive' => $poduitLastFive,
                'marque' => $marque,
                'categorie' => $categorie,
            ]);
        }
        else {
            return response()->json(['success'=>"Ce produit vient d'être ajouté"]);
        }
    }
}