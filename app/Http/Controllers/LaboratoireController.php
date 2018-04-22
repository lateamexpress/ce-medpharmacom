<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratoire;

class LaboratoireController extends Controller
{
    public function index()
    {
        $laboratoire = Laboratoire::all();

        return view('vitrine.laboratoire',[
            'laboratoire' => $laboratoire,
        ]);
    }

    public function filtre($slug)
    {

    }
}