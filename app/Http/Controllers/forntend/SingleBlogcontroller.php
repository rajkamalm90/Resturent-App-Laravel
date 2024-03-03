<?php

namespace App\Http\Controllers\forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleBlogcontroller extends Controller
{
    public function Singleblog(){

        return view('forntend.Singleblog');
        
    }
}
