<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    //public function admin ()
    //{

      //return view('admin.Admin');
   //}


   public function about ()
    {

      return view('admin.Admin');
   }

   public function index()
   {
       return view('forntend.index');
   }
  

   public function aboutresturent()
   {
       return view('forntend.about');
   }

   public function chefs()
   {
       return view('forntend.chefs');
   }

   public function foodmenu()
   {
       return view('forntend.about');
   }
   public function elements()
   {
       return view('forntend.elements');
   }

   public function singleblog()
   {
       return view('forntend.singleblog');
   }
   public function blog()
   {
       return view('forntend.blog');
   }
   public function login()
   {
       return view('forntend.contact');
   }

   public function register()
   {
       return view('forntend.about');
   }

}

