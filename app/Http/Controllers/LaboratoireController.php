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

    public function filtre(Request $request)
    {
        $this->validate($request, [
            'laboratoire' => 'required'
        ]);

        $slug = $request->all()['laboratoire'];
        $slug = strtoupper($slug);

        $laboratoire = Laboratoire::where('nom', 'like', '%'. $slug .'%')->get();
        return view('vitrine.laboratoire')->with('laboratoire', $laboratoire);
    }
}