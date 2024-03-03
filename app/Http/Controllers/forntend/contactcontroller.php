<?php

namespace App\Http\Controllers\forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function contact(){

        return view('forntend.contact');
        
    }
}
