<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index(){
        $data = Building::simplePaginate(6);
        return view('home', [
            "title" => "Home",
            "image" => "vu-anh-TiVPTYCG_3E-unsplash.jpg",
            "data" => $data
        ]);
    }


    public function getDetail($id){
        $data = Building::find($id);

        return view('details', [
            'title' => 'Detail',
            'data' => $data
        ]);
    }
}
