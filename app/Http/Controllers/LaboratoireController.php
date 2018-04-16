<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaboratoireController extends Controller
{
    public function index()
    {
        return view("vitrine.laboratoire");
    }
    public function filtre($slug)
    {

    }
}