<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class CatalogueController extends Controller
{
    public function produitAll()
    {
        $catalogue = Produit::all();

        return view('client/catalogue',[
            'catalogue' => $catalogue,
        ]);
    }

    public function produitsAll_And_FiveLast()
    {
        $poduitLastFive = Produit::all()->orderBy('id_produit', 'desc')->limit(5)->offset(5)->get();

        return view('admin/gestion-produits',[
            'produitLastFive' => $poduitLastFive
        ]);
    }


}
