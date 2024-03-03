<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\submitcontroller;
use App\Http\Controllers\submitdatacontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/signup', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/signup', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


//Route::get('/', [AdminController::class, 'admin'])->name('admin');
Route::get('/about', [AdminController::class, 'about'])->name('about');


Route::redirect('/', '/signup');




Route::post('/registerpopup', [Authcontroller::class, 'register'])->name('register');
Route::post('/loginpopup', [Authcontroller::class, 'login'])->name('login');


//Route::get('/', [AdminController::class, 'admin'])->name('admin');
Route::get('/Resturent', [AdminController::class, 'index']);
Route::get('/aboutresturent', [AdminController::class, 'aboutresturent']);
Route::get('/blog', [AdminController::class, 'blog']);
Route::get('/chefs', [AdminController::class, 'chefs']);
Route::get('/contact', [AdminController::class, 'contact']);

Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
Route::get('/menu', [submitdataController::class, 'product'])->name('product');


// Backend

Route::get('/menuAdd', [submitdataController::class, 'form']);
Route::post('/submit', [submitdataController::class, 'data_submit']);
Route::get('/getall', [submitdataController::class, 'data_fetch']);
Route::get('/edit{id}', [submitdataController::class, 'data_edit']);

Route::post('/update', [submitdataController::class, 'data_update']);
Route::get('/delete{id}', [submitdataController::class, 'data_delete']);

Route::post('/User', [UserController::class, 'data_submit']);
Route::get('/Userdata', [UserController::class, 'data_fetch']);

Route::get('/elements/{id}', [UserController::class, 'elements'])->name('elements');

Route::get('/update-subscribe', function () {
    User::where('subscribe', 'on')->update(['subscribe' => true]);
    return 'Subscription status updated successfully!';
});
