<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContentController;

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


//Content
Route::resource('/content', ContentController::class);

//Login
Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

//Register
Route::resource('/register', RegisterController::class);

//Dashboard
Route::get('/dashboard',[DashboardController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

