<?php

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/tryout', function () {
    $arrBelajar=["Bilogi SMA, Kimia Terapan "];
    return view('tryout')->with('tryout', $arrBelajar);
});
Route::get('/course', function () {
    return view('course');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/profil', function () {
    return view('profil');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


