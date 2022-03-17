<?php

use App\Http\Controllers\CheckController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Check;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('register',[RegisterController::class,'create'])->middleware('guest')->name('register.create');
Route::post('/register',[RegisterController::class,'store'])->middleware('guest')->name('register.store');

Route::get('/login',[SessionController::class,'create'])->middleware('guest')->name('login.create');
Route::post('/login',[SessionController::class,'store'])->middleware('guest')->name('login.store');
Route::get('/me',[SessionController::class,'me'])->middleware('auth');
Route::get('/logout',[SessionController::class,'destroy'])->middleware('auth');

Route::get('/dashboard',[CheckController::class,'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/{check}',[CheckController::class,'show'])->middleware('auth')->name('check');