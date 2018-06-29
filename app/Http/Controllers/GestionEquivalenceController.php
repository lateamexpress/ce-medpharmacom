<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generique;
use App\Models\Medicament;

class GestionEquivalenceController extends Controller
{
    public function generiqueAll()
    {
        $generique = Generique::all();

        return view('admin/gestion-equivalences', [
            'generique' => $generique,
        ]);
    }

    public function generiqueById($id)
    {
        $generique = Generique::find($id);

        return view('admin/gestion-equivalences-solo', [
            'generique' => $generique,
        ]);
    }

    public function generiqueAjouter()
    {
        Generique::create(Input::all());
        return redirect()->back()->with('flash_message', 'Générique ajouté');
    }

    public function generiqueModifier(Request $request, $id)
    {
        $generique = Generique::find($id);
        $generique->cip7 = $request->cip7;
        $generique->ref_id_image = $request->ref_id_image;
        $generique->ref_id_labo = $request->ref_id_labo;
        $generique->title = $request->title;
        $generique->princeps = $request->princeps;
        $generique->classe = $request->classe;
        $generique->actif = $request->actif;
        $generique->exip = $request->exip;
        $generique->statut = $request->statut;
        $generique->tx = $request->tx;
        $generique->presentation = $request->presentation;
        $generique->precaution = $request->precaution;
        $generique->grosse = $request->grosse;
        $generique->effets = $request->effets;
        $generique->indic = $request->indic;
        $generique->patho = $request->patho;

        $generique->save();
        return redirect()->back()->with('flash_message', 'Générique modifié');
    }

    public function generiqueSupprimer($id)
    {
        $generique = Generique::find($id);
        $generique->delete();
        return redirect()->back()->with('flash_message', 'Générique supprimé');
    }

    public function generiqueFiltre(Request $request)
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
            return view("admin/gestion-equivalences",[
                'generique' => $generique,
            ]);
        }
        elseif ($submitArray[1] == 'Medicament') {
            $medicament = Medicament::where('actif', 'like', '%'. $slug .'%')->get();
            return view("admin/gestion-equivalences",[
                'medicament' => $medicament,
            ]);
        }

    }
}
