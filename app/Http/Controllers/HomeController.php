<?php

namespace App\Http\Controllers;

use App\Models\Property;

class HomeController extends Controller
{
    public function index(){

//->available() provient de la fonction scopeAvailable du model property 
//les fonctions scope peuvent prendre des paramètres
        $properties=Property::orderBy('created_at', 'desc')->available()->limit(4)->get();
        return view('home',[ 'properties'=>$properties]);
    }
}
