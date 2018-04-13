<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class CatalogueController extends Controller
{
    public function index()
    {
        return view('client/catalogue');
    }

    public function produitAll()
    {
        $catalogue = Produit::all();

        return view('client/catalogue',[
            'catalogue' => $catalogue,
        ]);
    }

}
