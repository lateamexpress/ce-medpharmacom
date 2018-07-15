<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panier;
use Illuminate\Support\Facades\Session;

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
        dd(Session::all());
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

    public function getTemplatePanier(Request $request)
    {
        $cout = 0;
        if(isset(request()->all()['arrayProduits'])) {
            $i=0;
            $arrayProduits = request()->all()['arrayProduits'];
            foreach ($arrayProduits as $prod) {
                $cout += intval(session()->get('produits')[$i]['cout']);
                $i++;
            }
        }
        $total = 0;
        for ($i = 0; $i < count(Session::all()['produits']); $i++) {
            $total += intval(session()->get('produits')[$i]['quantite']) * intval(session()->get('produits')[$i]['quantite']);
        }
        return view('client/panier', [
            'cout' => $cout,
            'total' => $total,
        ]);
    }

    public function enregistrerCmd(Request $request) {

        // template livraison
        if($request['Commander']) {
            return view('client/enregistrer-commande')->with('prod', 'fouTesProduitsici');
        }
        // template commande effectuee
        else {
            $utilisateur = Utilisateur::find(Auth::user()["id_utilisateur"]);
            $utilisateur->email = $request->email;
            $utilisateur->nom = $request->nom;
            $utilisateur->tel = $request->tel;
            $utilisateur->adresse = $request->adresse;
            $utilisateur->code_postal = $request->code_postal;
            $utilisateur->ville = $request->ville;
            return view('client/fin-commande');
        }
    }

}
