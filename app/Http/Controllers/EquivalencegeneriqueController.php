<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generique;

class EquivalencegeneriqueController extends Controller
{
    public function index()
    {
        return view("vitrine.equivalence-generique");
    }
}