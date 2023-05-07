<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PostController;
use App\Http\Controllers\PenjualanController;

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

Route::resource('/posts', App\Http\Controllers\PostController::class);
Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/detail/{id_penjualan}', [PenjualanController::class, 'show']);
Route::get('/penjualan/tambah', [PenjualanController::class, 'create']);