<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
})->name('home')->middleware(['auth']);
Route::get('/register', [RegisterController::class, 'register'])->name('registerPage');
Route::post('/register',[RegisterController::class,'create'])->name('registerUser');
Route::get('/login',[LoginController::class,'loginPage'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login.post');
Route::get('/admin',[DashboardController::class,'dashboard'])->name('dashboard.main');
