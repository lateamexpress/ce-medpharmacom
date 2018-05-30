<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pub;

class GestionPubController extends Controller
{
    public function pubAll()
    {
        $pub = Pub::all();

        return view('admin/gestion-encarts-publicitaires', [
            'pub' => $pub,
        ]);
    }

    public function pubById($id)
    {
        $pub = Pub::find($id);

        return view('admin/gestion-encarts-publicitaires', [
            'pub' => $pub,
        ]);
    }

    public function pubAjouter()
    {
        Pub::create(Input::all());
        return redirect()->back()->with('flash_message', 'Encart publicitaire ajouté');
    }

    public function pubModifier(Request $request, $id)
    {
        $pub = Pub::find($id);
        $pub->nom = $request->nom;
        $pub->lien = $request->lien;
        $pub->ref_id_image = $request->ref_id_image;
        $pub->actif = $request->actif;

        $pub->save();
        return redirect()->back()->with('flash_message', 'Encart publicitaire modifié');
    }

    public function pubSupprimer($id)
    {
        $pub = Pub::find($id);
        $pub->delete();
        return redirect()->back()->with('flash_message', 'Encart publicitaire supprimé');
    }
}
