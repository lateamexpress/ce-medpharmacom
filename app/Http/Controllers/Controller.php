<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        if(Auth::user()->role == 'admin')
            return redirect("/admin");
        else if(Auth::user()->role == "users")
            return redirect("/");
        else if(!Auth::check())
            return redirect("/login");
        else
            throw new \Exception("Unknow users ".Auth::user()->nom);
    }
    
}
