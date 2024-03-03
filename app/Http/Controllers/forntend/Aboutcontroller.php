<?php

namespace App\Http\Controllers\forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Aboutcontroller extends Controller
{
    public function about()
    {
        return view('forntend.about');
    }
}

