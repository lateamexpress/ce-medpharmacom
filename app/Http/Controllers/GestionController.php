<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function centres()
    {
        return view('admin/gestion-centres');
    }

    public function commandes()
    {
        return view('admin/gestion-commandes');
    }

    public function encarts_publicitaires()
    {
        return view('admin/gestion-encarts-publicitaires');
    }

    public function equivalences()
    {
        return view('admin/gestion-equivalences');
    }

    public function laboratoires()
    {
        return view('admin/gestion-laboratoires');
    }

    public function visiteurs()
    {
        return view('admin/gestion-visiteurs');
    }

    public function partenaires()
    {
        return view('admin/gestion-partenaires');
    }

    public function produits()
    {
        return view('admin/gestion-produits');
    }

    public function utilisateurs()
    {
        return view('admin/gestion-utilisateurs');
    }
}
