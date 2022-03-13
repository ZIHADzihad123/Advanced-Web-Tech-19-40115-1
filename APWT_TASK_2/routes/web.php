<?php

use Illuminate\Support\Facades\Route;

//specify the location of controller :
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\contactController;

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
//login 
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmitted'])->name('login');

//registration
Route::get('/registration',[registrationController::class,'registration'])->name('registration');
Route::post('/registration',[registrationController::class,'registrationSubmitted'])->name('registration');

//contact
Route::get('/contact',[contactController::class,'contact'])->name('contact');
Route::post('/contact',[contactController::class,'contactSubmitted'])->name('contact');
