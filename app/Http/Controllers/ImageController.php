<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ImageController extends Controller
{
    public function display($id)
    {
        $produit = Produit::find($id);
        $path = "img/".$produit["photo"];
        $picture = asset($path);

        return view('image', [
            'picture' => $picture,
        ]);
    }
}