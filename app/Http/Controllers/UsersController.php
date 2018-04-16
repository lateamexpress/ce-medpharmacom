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

    public function index() {
        return view('client/mon-compte');
    }
}
