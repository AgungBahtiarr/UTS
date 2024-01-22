<?php

use App\Http\Controllers\AgungController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NimController;
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

Route::get('/', [Controller::class, 'index']);

Route::post('/barang', [NimController::class, 'store']);
Route::put('/barang/{id}', [NimController::class, 'update']);
Route::delete('/barang/{id}', [NimController::class, 'destroy']);



Route::post('/transaksi', [AgungController::class, 'store']);
Route::put('/transaksi/{id}', [AgungController::class, 'update']);
Route::delete('/transaksi/{id}', [AgungController::class, 'destroy']);



