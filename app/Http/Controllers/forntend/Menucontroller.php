<?php

namespace App\Http\Controllers\forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Menucontroller extends Controller
{
    public function foodmenu(){

        return view('forntend.foodmenu');
        
        
    }
}
