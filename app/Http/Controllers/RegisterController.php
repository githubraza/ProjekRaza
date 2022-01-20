<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            "title" => "Register",
        ]);
    }
}
