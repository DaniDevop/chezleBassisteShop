<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AdminController::class,'login'])->name('login.admin');
Route::get('/',[AdminController::class,'home'])->name('home.admin');
Route::post('/doLogin',[AdminController::class,'doLogin'])->name('doLogin.admin');

Route::get('/register',[AdminController::class,'register'])->name('register.admin');
Route::post('/registerAdmin',[AdminController::class,'registerAdmin'])->name('register.admin.informations');
