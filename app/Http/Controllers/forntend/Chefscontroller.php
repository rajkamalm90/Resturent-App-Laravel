<?php

namespace App\Http\Controllers\forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Chefscontroller extends Controller
{
    public function chefs(){


        return view('forntend.chefs');
        
    }
}
