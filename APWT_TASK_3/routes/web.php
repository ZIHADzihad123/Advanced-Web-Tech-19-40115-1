<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
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

Route::get('/database', [studentcontroller::class, 'databaseget'])->name('database');

Route::get('/home', [studentcontroller::class, 'homeget'])->name('home');

Route::get('/login', [studentcontroller::class, 'loginget'])->name('login');
Route::post('login/post', [studentcontroller::class, 'loginpost'])->name('login.post');

Route::get('/logout', [studentcontroller::class, 'logoutget'])->name('logout');

Route::get('/signup', [studentcontroller::class, 'signupget'])->name('signup');
Route::post('/signup', [studentcontroller::class, 'signuppost'])->name('signup');

Route::get('/crud', [studentcontroller::class, 'crudget'])->name('crud');

Route::get('/edit/{id}', [studentcontroller::class, 'editget'])->name('edit');
Route::post('/edit/{id}', [studentcontroller::class, 'updatepost'])->name('update');
Route::get('/delete/{id}', [studentcontroller::class, 'deleteget'])->name('delete');

Route::get('/admin/dash', [studentcontroller::class, 'admindash'])->name('admindash')->middleware('validadmin');

Route::get('/user/dash', [studentcontroller::class, 'userdash'])->name('userdash')->middleware('validuser');
