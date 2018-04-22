<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function display($id)
    {
        $image = Image::find($id);
        $path = "img/".$image["lien"];
        $picture = asset($path);

        return view('image', [
            'picture' => $picture,
        ]);
    }
}