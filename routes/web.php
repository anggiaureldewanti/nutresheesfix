<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/drink1', function () {
    return view('partials/drink1');
});

Route::get('/kandungan', function () {
    return view('pages/kandungan');
});

Route::get('/histori-laporanmu', function () {
    return view('pages/histori/histori-laporan');
});





//route komentar
Route::resource('/komentar', \App\Http\Controllers\PostController::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/login', [LoginController::class, 'halamanlogin']);

//login-regis
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
