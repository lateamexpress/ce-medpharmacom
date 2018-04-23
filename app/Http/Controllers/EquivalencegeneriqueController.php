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

    public function filtreMedicamentGenerique(Request $request)
    {
        $this->validate($request, [
            'equivalence-generique' => 'required'
        ]);

        $slug = $request->all()['equivalence-generique'];
        $slug = strtoupper($slug);

        $submitArray = [];

        $submitGenerique = $request['Generique'];
        $submitMedicament = $request['Medicament'];

        array_push($submitArray, $submitGenerique, $submitMedicament);

        if($submitArray[0] == 'Generique') {
            $generique = Generique::where('actif', 'like', '%'. $slug .'%')->get();
            return view("vitrine.equivalence-generique",[
                'generique' => $generique,
            ]);
        }
        elseif ($submitArray[1] == 'Medicament') {
            $medicament = Medicament::where('actif', 'like', '%'. $slug .'%')->get();
            return view("vitrine.equivalence-generique",[
                'medicament' => $medicament,
            ]);
        }
    }
}