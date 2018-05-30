<?php

namespace App\Http\Controllers;

class GestionController extends Controller
{
    public function partenaires()
    {
        return view('admin/gestion-partenaires');
    }
}
