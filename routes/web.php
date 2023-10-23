<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

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

Route::get('/home', function () {
    return view('index');
});

Route::get('/login',[authController::class,'index'])->name('login');


Route::post('/login',[authController::class,'login'])->name('login.submit');
Route::get('/logout',[authController::class,'logout'])->middleware('auth')->name('logout');
