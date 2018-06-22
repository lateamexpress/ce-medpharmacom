<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panier;

class PanierController extends Controller
{

    public function panierbyid($id)
    {
        $commande = Panier::find($id);

        return view('admin/gestion-commandes', [
            'commande' => $commande,
        ]);
    }

    public function panierAjouter()
    {
        Panier::create(Input::all());
        return redirect()->back()->with('flash_message', 'Commande ajouté');
    }

    public function panierModifier(Request $request, $id)
    {
        $commande = Panier::find($id);
        $commande->ref_id_utilisateur = $request->ref_id_utilisateur;
        $commande->ref_id_produit = $request->ref_id_produit;
        $commande->quantite = $request->quantite;
        $commande->date = $request->date;
        $commande->statut = $request->statut;

        $commande->save();
        return redirect()->back()->with('flash_message', 'Commande modifié');
    }

    public function panierSupprimer($id)
    {
        $commande = Panier::find($id);
        $commande->delete();
        return redirect()->back()->with('flash_message', 'Panier supprimé');
    }

}