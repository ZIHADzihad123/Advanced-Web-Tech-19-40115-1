<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task_1_Controller;
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

Route::get('/home', [Task_1_Controller::class,'home'])->name('home');
Route::get('/service', [Task_1_Controller::class,'service'])->name('service');
Route::get('/ourTeams', [Task_1_Controller::class,'ourTeams'])->name('ourTeams');
Route::get('/aboutUs', [Task_1_Controller::class,'aboutUs'])->name('aboutUs');
Route::get('/contactUs', [Task_1_Controller::class,'contactUs'])->name('contactUs');

