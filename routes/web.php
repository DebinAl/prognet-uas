<?php

use App\Http\Controllers\contabout;
use App\Http\Controllers\contindex;
use App\Http\Controllers\contlogin;
use App\Http\Controllers\contregister;
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

Route::get('/', [contindex::class, 'index']);
Route::post('/', [contindex::class, 'store']);


Route::get('/gallery', function () {
    return view('gallery.index');
});



Route::get('/sosmed', function () {
    return view('sosmed.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});
//ABOUT PAGE
Route::get('/about', [contabout::class, 'index']);
Route::post('/about', [contabout::class, 'store']);

//LOGIN PAGE
Route::get('/login', [contlogin::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [contlogin::class, 'authentication']);
Route::post('/logout', [contlogin::class, 'logout']);

//REGISTER PAGE
Route::get('/register', [contregister::class,'index']);
route::post('/register', [contregister::class,'store']);
