<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function returnSpecificHome() {
        $user = Auth::user();
        if($user['role'] == 'users') {
            return view('client/home');
        }
        elseif($user['role'] == 'admin') {
            return view('admin/admin');
        }
    }
}
