<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class UsersController extends Controller
{
    public function insertUsers()
    {
        $utilisateur = Utilisateur::create(Input::all());
        return redirect()->back()->with('flash_message', 'Utilisateur ajouté');

    }

    public function usersModifier(Request $request)
    {
        $passwordHash = bcrypt($request->password);
        $utilisateur = Utilisateur::find(Auth::user()["id_utilisateur"]);
        $utilisateur->password = $passwordHash;
        $utilisateur->email = $request->email;
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->tel = $request->tel;
        //$utilisateur->adresse = $request->adresse;
        //$utilisateur->code_postal = $request->code_postal;
        //$utilisateur->ville = $request->ville;
        $utilisateur->save();
        return redirect()->back()->with('flash_message', 'Utilisateur modifié');
    }

    public function index() {
        $utilisateur = Utilisateur::find(Auth::user()["id_utilisateur"]);

        return view('client/mon-compte', [
            'utilisateur' => $utilisateur,
        ]);
    }
}