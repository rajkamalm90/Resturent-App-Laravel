<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\forntend\Homecontroller; // Correct namespace for HomeController
use App\Http\Controllers\forntend\Aboutcontroller;
use App\Http\Controllers\forntend\Blogcontroller;
use App\Http\Controllers\forntend\Chefscontroller;
use App\Http\Controllers\forntend\Contactcontroller;
use App\Http\Controllers\forntend\Elementcontroller;
use App\Http\Controllers\forntend\Menucontroller;
use App\Http\Controllers\forntend\SingleBlogcontroller;
use App\Http\Controllers\admin\admincontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider, and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hp', [Homecontroller::class, 'index']);
Route::get('/', [admincontroller::class, 'admin']);
Route::get('/About', [Aboutcontroller::class, 'about']);
Route::get('/blog', [Blogcontroller::class, 'blog']);
Route::get('/chefs', [Chefscontroller::class, 'chefs']);
Route::get('/contact', [Contactcontroller::class, 'contact']);
Route::get('/elements', [Elementcontroller::class, 'elements']);
Route::get('/foodmenu', [Menucontroller::class, 'foodmenu']);
Route::get('/singleblog', [SingleBlogcontroller::class, 'singleblog']);
