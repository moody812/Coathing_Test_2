<?php

namespace App\Http\Controllers;

use App\Animal;

class CoachingController extends Controller
{
    public function index()
    {
        // Q1-2
        $animals = Animal::all();
        return view("index",[
            "animals" => $animals
        ]);
    }

    public function detail($id)
    {
        //Q2-2
        $animal = Animal::find($id);
        return view("detail",[
            "animal" => $animal
        ]);
    }
}