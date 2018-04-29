<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Commande;

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

    public function ajoutCommande()
    {
        $commande = Commande::create(Input::all());
        return redirect()->back()->with('flash_message', 'Commande ajouté');
    }

    public function updateCommande()
    {
        // TODO le mieux serait de me return de l'HTML pour que je puisse hydrater les views
    }
    public function deleteCommande()
    {
        // TODO le mieux serait de me return de l'HTML pour que je puisse hydrater les views
    }
}