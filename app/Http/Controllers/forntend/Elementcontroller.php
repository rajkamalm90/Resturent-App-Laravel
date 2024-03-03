<?php

namespace App\Http\Controllers\forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Elementcontroller extends Controller
{
    public function elements(){

        return view('forntend.elements');
        
    }
}
