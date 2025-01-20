<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller{
    public function inicio(){
        return view('inicio');
    }

    public function discos(){
        return view('discos');
    }

    public function empresa(){
        return view('empresa');
    }
    public function contacto(){
        return view('contacto');
    }
}
