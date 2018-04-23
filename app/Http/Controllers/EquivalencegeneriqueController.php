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

        $submitArray = [];

        $submitGenerique = $request['Generique'];
        $submitMedicament = $request['Medicament'];

        array_push($submitArray, $submitGenerique, $submitMedicament);

        var_dump($submitArray);

        foreach($submitArray as $key => $val) {
            var_dump($key);
            switch ($key) {
                // Medic
                case 'Medicament':
                    $medicament = Medicament::where('actif', 'like', '%'. $slug .'%')->get();
                    return view("vitrine.equivalence-generique",[
                        'medicament' => $medicament,
                    ]);
                    break;
                // Generic
                case 'Generique':
                    $generique = Generique::where('actif', 'like', '%'. $slug .'%')->get();
                    return view("vitrine.equivalence-generique",[
                        'generique' => $generique,
                    ]);
                    break;
                default:
                    var_dump('Error');
                    break;

            }
        }

    }


    public function filtreGenerique(Request $request)
    {
        $this->validate($request, [
            'equivalence-generique' => 'required'
        ]);

        $slug = $request->all()['equivalence-generique'];
        $slug = strtoupper($slug);
    }
}