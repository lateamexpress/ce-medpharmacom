<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class CatalogueController extends Controller
{
    public function produitAll()
    {
<<<<<<< HEAD
        $catalogue = Produit::paginate(15);
=======
        $catalogue = Produit::all()->paginate(15);
>>>>>>> 38d82456316a408ccbc9ad417288f39a55e58074
        $poduitLastFive = Produit::all()->sortByDesc('id_produit')->take(5);
        return view('client/catalogue',[
            'catalogue' => $catalogue,
            'produitLastFive' => $poduitLastFive
        ]);
    }

    public function produitById($id)
    {
        $produit = Produit::find($id);

        return view('client/produit', [
            'produit' => $produit
        ]);
    }
}