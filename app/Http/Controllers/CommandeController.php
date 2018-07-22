<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Commande;
use App\Models\Commandeproduit;
use App\Models\Utilisateur;
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
        $commandeProduit = Commandeproduit::where('ref_id_commande', 'like', $commande->id_commande)->get();

        return view('client/detail-commande',[
            'commande' => $commande,
            'commandeProduit' => $commandeProduit,
        ]);
    }

    public function getTemplateLivraison() {
        return view('client/enregistrer-commande');
    }

    public function ajoutCommande(Request $request)
    {
        if (!empty($request->email))
            Auth::user()->email = $request->email;
        if (!empty($request->nom))
            Auth::user()->nom = $request->nom;
        if (!empty($request->tel))
            Auth::user()->tel = $request->tel;
        if (!empty($request->adresse))
            Auth::user()->adresse = $request->adresse;
        if (!empty($request->code_postal))
            Auth::user()->code_postal = $request->code_postal;
        if (!empty($request->ville))
            Auth::user()->ville = $request->ville;
        Auth::user()->save();

        date_default_timezone_set('Europe/Paris');
        if (Auth::user()->nbr_point >= $request->total) {
            $commande = Commande::create([
            'ref_id_utilisateur' => Auth::user()->id_utilisateur,
            'date' => date("Y-m-d H:i:s"),
            'statut' => "En cours",
            ]);

            $refIdCommande = $commande->id_commande;
            for($i=0;$i<count(session()->get('produits'));$i++){
                Commandeproduit::create([
                    'ref_id_commande' => $refIdCommande,
                    'ref_id_produit' => session()->get('produits')[$i]['idProduit'],
                    'quantite' => session()->get('produits')[$i]['quantite'],
                ]);
            }

            $total = 0;
            for ($i = 0; $i < count(Session::all()['produits']); $i++) {
                $total += intval(session()->get('produits')[$i]['quantite']) * intval(session()->get('produits')[$i]['cout']);
            }
            dump(Auth::user()->nbr_point);
            Auth::user()->nbr_point -= $total;
            dump(Auth::user()->nbr_point);
            dump($total);
            Auth::user()->save();
            dump(Auth::user());exit;

            /*
            Mail::send('emails.commande-message', [
                'user' => $user,
                'total' => $total
            ], function($mail) use($request) {
                $mail->from($request->email, $request->name);
                $mail->to('contact@medpharmacom.fr')->subject('Validation commande');
            });
            */
            session()->forget('produits');
            return view('client/fin-commande');
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