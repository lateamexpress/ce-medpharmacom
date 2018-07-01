<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Commande;
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
        $commande = Commande::create([
            'ref_id_utilisateur' => Auth::id(),
            'date' => date("Y-m-d"),
        ]);

        $refIdCommande = $commande->id_commande;

        for($i=0;$i<count(Session::get());$i++){
            Commandeproduit::create([
                'ref_id_commande' => $refIdCommande,
                'ref_id_produit' => Session::get(),
                'statut' => "En cours",
            ]);
        }
        return redirect()->back()->with('flash_message', 'Commande ajouté');
    }

    public function updateCommande()
    {

    }
    public function deleteCommande()
    {

    }
}