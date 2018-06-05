<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class GestionCommandeController extends Controller
{
    public function commandeAll()
    {
        //$commande = Commande::all();
        $commande = Commande::with(['utilisateur', 'produit'])->get();

        return view('admin/gestion-commandes', [
            'commande' => $commande,
        ]);
    }

    public function commandebyid($id)
    {
        $commande = Commande::with(['utilisateur', 'produit'])->get()->find($id);

        return view('admin/gestion-commandes-solo', [
            'commande' => $commande,
        ]);
    }

    public function commandeAjouter()
    {
        Commande::create(Input::all());
        return redirect()->back()->with('flash_message', 'Commande ajouté');
    }

    public function commandeModifier(Request $request, $id)
    {
        $commande = Commande::find($id);
        $commande->ref_id_utilisateur = $request->ref_id_utilisateur;
        $commande->ref_id_produit = $request->ref_id_produit;
        $commande->quantite = $request->quantite;
        $commande->date = $request->date;
        $commande->statut = $request->statut;
        $commande->save();
        return redirect()->back()->with('flash_message', 'Commande modifié');
    }

    public function commandeSupprimer($id)
    {
        $commande = Commande::find($id);
        $commande->delete();
        return redirect()->back()->with('flash_message', 'Commande supprimé');
    }
}
