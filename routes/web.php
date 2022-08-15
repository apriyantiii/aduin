<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/beranda', function () {
    return view('beranda', [
        'tittle' => 'Beranda'
    ]);
});

Route::get('/', function () {
    return view('daftar');
});


Route::get('/beranda-login', function () {
    return view('beranda2', [
        'tittle' => 'Beranda Login'
    ]);
});

Route::get('/masuk', [LoginController::class, 'index']);

Route::get('/daftar', [RegisterController::class, 'index']); //untuk menampilkan
Route::post('/daftar', [RegisterController::class, 'store'])->name("daftar.submit");//untuk menyimpan
