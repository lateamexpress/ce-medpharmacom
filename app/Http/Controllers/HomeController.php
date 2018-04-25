<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // testing affichage

    public function returnView() {
        return view('client/home');
    }
}
