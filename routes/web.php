<?php

use App\Http\Controllers\TokobukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AkunController;
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

Route::get('', [TokobukuController::class, 'index']);
Route::get('/tokobuku/tambah', [TokobukuController::class, 'create']);
Route::get('/tokobuku/daftar', [AkunController::class, 'index']);
Route::get('/tokobuku/masuk', [AkunController::class, 'login']);
Route::get('/tokobuku/allprod', [KategoriController::class, 'allprod']);
Route::post('/tokobuku', [TokobukuController::class, 'store']);
Route::post('/tokobuku', [TokobukuController::class, 'store2']);
Route::get('/tokobuku/kategori', [KategoriController::class, 'index']);
Route::get('/tokobuku/{id_prod}', [TokobukuController::class, 'show']);
Route::delete('/produk/{id_prod}', [TokoBukuController::class, 'destroy']);
Route::get('/transaksi/chart', [TransaksiController::class, 'index']);


Route::resources([
    'TokoBuku' => TokobukuController::class,
    'Kategori' => KategoriController::class,
    'Transaksi' => TransaksiController::class,
    'Akun' => AkunController::class,
]);
