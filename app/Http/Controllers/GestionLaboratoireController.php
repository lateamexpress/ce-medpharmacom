<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratoire;

class GestionLaboratoireController extends Controller
{
    public function laboratoireAll()
    {
        $laboratoire = Laboratoire::all();

        return view('admin/gestion-laboratoires', [
            'laboratoire' => $laboratoire
        ]);
    }

    public function laboratoireById($id)
    {
        $laboratoire = Laboratoire::find($id);

        return view('admin/gestion-laboratoires-solo', [
            'laboratoire' => $laboratoire
        ]);
    }

    public function laboratoireAjouter()
    {
        Laboratoire::create(Input::all());
        return redirect()->back()->with('flash_message', 'Laboratoire ajouté');
    }

    public function laboratoireModifier(Request $request, $id)
    {
        $laboratoire = Laboratoire::find($id);
        $laboratoire->nom = $request->nom;
        $laboratoire->ref_id_image = $request->ref_id_image;
        $laboratoire->adresse = $request->adresse;
        $laboratoire->tel = $request->tel;
        $laboratoire->fax = $request->fax;

        var_dump($laboratoire->nom);
        var_dump($laboratoire->fax);

        $laboratoire->site = $request->site;

        $laboratoire->save();
        return redirect()->back()->with('flash_message', 'Laboratoire modifié');
    }

    public function laboratoireSupprimer($id)
    {
        $laboratoire = Laboratoire::find($id);
        $laboratoire->delete();
        return redirect()->back()->with('flash_message', 'Laboratoire supprimé');
    }
}
