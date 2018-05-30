<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class CatalogueController extends Controller
{
    public function produitAll()
    {
        $catalogue = Produit::all();
        $poduitLastFive = Produit::all()->sortByDesc('id_produit')->take(5);
        return view('client/catalogue',[
            'catalogue' => $catalogue,
            'produitLastFive' => $poduitLastFive
        ]);
    }
}
