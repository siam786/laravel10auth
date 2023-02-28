<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomRegisterController;


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

    //Auth::routes();


Route::get('register',[CustomRegisterController::class,'RegisterFromShow'])->name('register');
Route::get('login',[CustomRegisterController::class,'loginFromShow'])->name('login');
Route::post('login',[CustomRegisterController::class,'loginUser'])->name('login.store');
Route::post('register',[CustomRegisterController::class,'RegisterUser'])->name('register.store');

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('logout',[CustomRegisterController::class,'logout'])->name('logout');
});