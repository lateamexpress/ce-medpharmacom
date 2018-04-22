<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratoire;

class LaboratoireController extends Controller
{
    public function index()
    {
        return view('vitrine.laboratoire');
    }

    public function filtre($slug)
    {
        $slug = strtoupper($slug);

        $laboratoire = Laboratoire::where('nom', 'like', '%'. $slug .'%')->get();

        return view('vitrine.laboratoire',[
            'laboratoire' => $laboratoire,
        ]);

    }
}