<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function index($id) {

        $produit = Produit::find($id);

        return view('client/produit', [
            'produit' => $produit
        ]);
    }
}