<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('beranda.index', [
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


Route::get('/masuk', [LoginController::class, 'index'])->name('login');
Route::post('/masuk', [LoginController::class, 'authenticate']);

Route::get('/daftar', [RegisterController::class, 'index']); //untuk menampilkan
Route::post('/daftar', [RegisterController::class, 'store'])->name("daftar.submit"); //untuk menyimpan

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
