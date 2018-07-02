<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Commande;
use App\Models\Utilisateur;
use App\Models\Commandeproduit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommandeController extends Controller
{
    public function index()
    {
        return view('client/commande');
    }

    public function commandeParId($id)
    {
        $commande = Commande::find($id);
        return view('client/commande',[
            'commande' => $commande,
        ]);
    }

    public function ajoutCommande(Request $request)
    {
        $user = Auth::user();

        $commande = Commande::create([
            'ref_id_utilisateur' => $user->id_utilisateur,
            'date' => date("Y-m-d"),
            'statut' => "En cours",
        ]);

        $refIdCommande = $commande->id_commande;
        for($i=0;$i<count(session()->get('produits'));$i++){
            Commandeproduit::create([
                'ref_id_commande' => $refIdCommande,
                'ref_id_produit' => session()->get('produits')[$i]['produit'],
            ]);
            //$user->nbr_point -= intval(session()->get('produits')[$i]['cout']);
        }
        $user->save();
        return redirect()->back()->with('flash_message', 'Commande ajouté');
    }

    public function updateCommande()
    {

    }
    public function deleteCommande()
    {

    }
}