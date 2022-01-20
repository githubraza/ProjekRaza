<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;
use App\Models\post;

class PropertyController extends Controller
{
    public function index()
    {
        $data = Building::all();
        return view('listing', [
            "title" => "Listing",
            "data" => $data
        ]);
    }

    public function show($slug)
    {
        return view('property', [
            "title" => "Property",
            "post" => Post::find($slug)
        ]);
    }
}
