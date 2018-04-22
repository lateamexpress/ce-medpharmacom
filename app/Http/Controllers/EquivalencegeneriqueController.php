<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generique;
use App\Models\Medicament;

class EquivalencegeneriqueController extends Controller
{
    public function index()
    {
        return view("vitrine.equivalence-generique");
    }

    public function filtreMedicament(Request $request)
    {
        $this->validate($request, [
            'equivalence-generique' => 'required'
        ]);

        $slug = $request->all()['equivalence-generique'];
        $slug = strtoupper($slug);

        $medicament = Medicament::where('actif', 'like', '%'. $slug .'%')->get();
        return view("vitrine.equivalence-generique",[
            'medicament' => $medicament,
        ]);
    }

    public function filtreGenerique(Request $request)
    {
        $this->validate($request, [
            'equivalence-generique' => 'required'
        ]);

        $slug = $request->all()['equivalence-generique'];
        $slug = strtoupper($slug);

        $generique = Generique::where('actif', 'like', '%'. $slug .'%')->get();
        return view("vitrine.equivalence-generique",[
            'generique' => $generique,
        ]);
    }
}