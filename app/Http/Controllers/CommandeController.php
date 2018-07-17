<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Commande;
use App\Models\Utilisateur;
use App\Models\Commandeproduit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

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
    public function getTemplateLivraison() {
        return view('client/enregistrer-commande');
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
                'quantite' => session()->get('produits')[$i]['quantite'],
            ]);
        }

        if ($user->nbr_point >= $request->total) {
            $user->nbr_point -= $request->total;
            $user->save();
            $total = 0;
            for ($i = 0; $i < count(Session::all()['produits']); $i++) {
                $total += intval(session()->get('produits')[$i]['quantite']) * intval(session()->get('produits')[$i]['quantite']);
            }

            Mail::send('emails.commande-message', [
                'user' => $user,
                'total' => $total
            ], function($mail) use($request) {
                $mail->from($request->email, $request->name);
                $mail->to('contact@medpharmacom.fr')->subject('Validation commande');
            });

            session()->forget('produits');
            return redirect()->back()->with('flash_message', 'Commande ajouté');
        }
        else
        {
            return redirect()->back()->with('flash_message', 'Vous n\'avez pas les suffisamment de points');
        }

    }

    public function updateCommande()
    {

    }
    public function deleteCommande()
    {

    }
}