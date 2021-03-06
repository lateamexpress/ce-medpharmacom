<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panier;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Utilisateur;

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

    public function deleteProduit(Request $request)
    {
        if (isset(request()->all()['produit'])) {
            if(isset(Session::all()['produits'])) {
                foreach (Session::all()['produits'] as $k => $prod) {
                    // si ajax vaut un idProduit de la session
                    if($prod['idProduit'] == $request['produit']) {
                        // unset(Session::all()['produits'][$k];
                        $request->session()->forget('produits.' . $k);
                    }
                }
            }
        }
    }

    public function getTemplatePanier(Request $request)
    {
        $total = 0;
        if(isset(Session::all()['produits'])) {
            for ($i = 0; $i < count(Session::all()['produits']); $i++) {
                $total += intval(session()->get('produits.'.$i)['cout']) * intval(session()->get('produits.'.$i)['quantite']);
            }
        }
        return view('client/panier', [
            'total' => isset($total) ? $total : '' ,
        ]);
    }

    public function enregistrerCmd(Request $request) {
            $utilisateur = Utilisateur::find(Auth::user()["id_utilisateur"]);
            $utilisateur->nom = $request->nom;
            $utilisateur->tel = $request->tel;
            $utilisateur->adresse = $request->adresse;
            $utilisateur->code_postal = $request->code_postal;
            $utilisateur->ville = $request->ville;
            $utilisateur->save();
            return view('client/fin-commande');
    }
}
