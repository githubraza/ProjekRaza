<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            "title" => "Login",
        ]);
    }

 
}
