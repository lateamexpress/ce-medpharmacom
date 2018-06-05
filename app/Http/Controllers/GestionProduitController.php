<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

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

    public function produitAjouter()
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
}
