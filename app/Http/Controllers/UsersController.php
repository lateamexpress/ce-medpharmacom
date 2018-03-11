<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function insertUsers(Request $request)
    {
    }
    public function index() {
        return view('client/mon-compte');
    }
}
