<?php

use App\Http\Controllers\DataMasterController;
use App\Http\Controllers\LoginControllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\LoginController;

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

//Route::get('/', function () {
//    return view('welcome');
// });
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/home', [HomeControllers::class, 'index'])->name('home');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/users', [DataMasterController::class, 'data_user'])->name('users');
Route::get('/jenis', [DataMasterController::class, 'data_jenis'])->name('jenis');
Route::get('/barang', [DataMasterController::class, 'data_barang'])->name('barang');
Route::get('/laporan', [DataMasterController::class, 'data_laporan'])->name('laporan');
Route::get('/pajak', [DataMasterController::class, 'data_pajak'])->name('pajak');
Route::get('/dashboard', [DataMasterController::class, 'dashboard'])->name('dashboard');
Route::get('/transaksi', [DataMasterController::class, 'transaksi'])->name('transaksi');
Route::get('/profile', [DataMasterController::class, 'profile'])->name('profile');