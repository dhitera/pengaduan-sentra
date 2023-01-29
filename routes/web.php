<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\makeAspirasiController;
use App\Http\Controllers\showAspirasiController;

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

Route::redirect('/', 'home', 301);
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('register',[RegisterController::class,'create'])->name('register');
Route::post('register',[RegisterController::class,'store'])->name('register');

Route::get('login',[LoginController::class,'create'])->name('login');
Route::post('login',[LoginController::class,'authenticate'])->name('login');
Route::post('logout',[LoginController::class,'logout'])->name('logout');

Route::get('buat-aspirasi',[makeAspirasiController::class,'create'])->name('buat-aspirasi');
Route::post('buat-aspirasi',[makeAspirasiController::class,'store'])->name('buat-aspirasi');
Route::get('aspirasi',[makeAspirasiController::class,'show'])->name('aspirasi');

Route::get('dashboard/data-user',[DashboardController::class,'create'])->name('dashboard');
Route::get('deleteUser/{id}',[DashboardController::class,'delete'])->name('deleteUser');