<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function in ($tipo = null){
        return view('in', compact('tipo'));
    }
}

