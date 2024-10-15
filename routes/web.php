<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Models\Produk;
use App\Models\User;
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
Route::get('/login',[UserController::class,'Vlogin']);
Route::post('/auth',[UserController::class,'login']);

Route::middleware('cek')->group(function(){
    Route::get('/beranda',[ProdukController::class,'home']);
    Route::get('/beranda/cari',[ProdukController::class,'search']);
    Route::get('/tambah',[ProdukController::class,'create']);
    Route::post('/tambah',[ProdukController::class,'created']);
    Route::get('/hapus/{id}',[ProdukController::class,'delete']);
    Route::get('/edit/{id}',[ProdukController::class,'update']);
    Route::post('/edit/{id}',[ProdukController::class,'updated']);
    Route::get('/logout',[UserController::class,'logout']);
});
