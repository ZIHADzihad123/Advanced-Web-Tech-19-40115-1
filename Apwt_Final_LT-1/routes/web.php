<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\signupcontroller;
use App\Http\Controllers\productcontroller;
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
    return view('index');
});



//login
Route::get('/index', [PagesController::class, 'indexget'])->name('index');
Route::get('/login', [PagesController::class, 'loginget'])->name('login');
Route::post('login/auth', [signupcontroller::class, 'loginpost'])->name('login.auth');

//logout
Route::get('/logout', [signupcontroller::class, 'logoutget'])->name('logout');

//signup
Route::get('/signup', [signupcontroller::class, 'signupget'])->name('signup');
Route::post('signup', [Signupcontroller::class, 'signuppost'])->name('signup');

//profile
Route::get('/profile', [signupcontroller::class, 'profileget'])->name('profile')->middleware('validadmin');

//admin
Route::get('userscrud', [signupcontroller::class, 'crudget'])->name('userscrud')->middleware('validadmin');

Route::get('/edit/{id}', [signupcontroller::class, 'editget'])->name('edit')->middleware('validadmin');
Route::put('/edit/{id}', [signupcontroller::class, 'updatepost'])->name('update')->middleware('validadmin');

Route::get('/admin/dash', [signupcontroller::class, 'admindash'])->name('admindash')->middleware('validadmin');
Route::get('/delete/{id}', [signupcontroller::class, 'deleteget'])->name('delete')->middleware('validadmin');


//products
Route::get('/product', [productcontroller::class, 'productget'])->name('product')->middleware('validadmin');

Route::get('/deleteproduct/{id}', [productcontroller::class, 'deleteget'])->name('deleteproduct')->middleware('validadmin');

Route::get('/addproduct', [productcontroller::class, 'addproductget'])->name('addproduct')->middleware('validadmin');

Route::post('/addproduct', [productcontroller::class, 'addproductpost'])->name('addproduct')->middleware('validadmin');

