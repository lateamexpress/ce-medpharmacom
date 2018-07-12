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
        if (isset(request()->all()['arrayProduits'])) {
            $arrayProduits = request()->all()['arrayProduits'];

            $uniqueArray = array_unique($arrayProduits, SORT_REGULAR);
            // TODO NE PUSH QUE LES VALEURS UNIQUES
            //var_dump($uniqueArray);
            $unique = true;
            $save_quantite = 0;

            if(isset(Session::all()['produits'])) {
                foreach (Session::all()['produits'] as $k => $prod) {
                    foreach ($uniqueArray as $kAjax => $prodAjax) {
                        if(Session::all()['produits'][$k]['produit'] == $uniqueArray[$kAjax]['produit']) {
                            unset(Session::all()['produits'][$k]);
                        }
                        else {
                            //var_dump($prodAjax);
                            //var_dump($prod);
                            //$request->session()->push('produits', $prodAjax);
                           // var_dump(Session::all()['produits'][$k]['produit'],  $uniqueArray[$kAjax]['produit']);
                        }
                    }
                }
                //$request->session()->push('produits', $prod);
            }
            else {
                foreach ($uniqueArray as $prod) {
                    $request->session()->push('produits', $prod);
                }
            }

            //var_dump(Session::all()['produits']);

            if (!isset(Session::all()['produits'])) {
//                if (!array_key_exists('produits', Session::all())) {
//                    foreach ($arrayProduits as $prod) {
//                        $request->session()->push('produits', $prod);
//                    }
//                }
//
//                for ($i = 0; $i < count(Session::all()['produits']); $i++) {
//                    if ($uniqueArray[0]["produit"] === Session::all()['produits'][$i]["produit"]) {
//                        $unique = false;
//                        $save_quantite = intval(session()->get('produits')[$i]['quantite']);
//                        //$save_session = session()->get('produits');
//                        $request->session()->forget('produits');
//                        foreach ($uniqueArray as $prod) {
//                            $request->session()->push('produits', $prod);
//                        }
//                        //$request->session()->forget(['produits'][$i]);
//                        //$request->session()->forget('produits');
//                    }
//                }
//
//                if (!$unique) {
//                    $uniqueArray[0]["quantite"] += $save_quantite;
//                }
//                //var_dump(Session::all()['produits'][0]);
//                // TODO ON PUSH DANS LA SESSION SEULEMENT LES VALEURS UNE SEULE FOIS
//                foreach ($uniqueArray as $prodUnique) {
//                    $request->session()->push('produits', $prodUnique);
//                }


            }
            //$request->session()->forget();
            //$request->session()->flush();
            //$request->session()->regenerate();
            if ($request['Commander']) {
                // TODO il faut recup les values de $arrayProduit mais ça me donne un truc bizarre, ça n'affiche pas les produits...
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

                $total = 0;
                for ($i = 0; $i < count(Session::all()['produits']); $i++) {
                    $total += intval(session()->get('produits')[$i]['quantite']) * intval(session()->get('produits')[$i]['quantite']);
                }
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
                    'total' => $total,
                ]);
            }
//        else {
//            return response()->json(['success'=>"Ce produit vient d'être ajouté"]);
//        }
        }
    }
}