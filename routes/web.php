<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomeController::class,'Home']);
Route::get('/level',[LevelController::class,'index']);
Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/user',[UserController::class,'index']);
Route::get('/user/tambah',[UserController::class,'tambah']);
Route::post('/user/tambah_simpan',[UserController::class,'tambah_simpan']);
Route::get('/user/ubah/{id}',[UserController::class,'ubah']);
Route::put('/user/ubah_simpan/{id}',[UserController::class,'ubah_simpan']);
Route::get('/user/hapus/{id}',[UserController::class,'hapus']);


// Route::get('/user/{id}/name/{name}',[UserController::class,'user']);
Route::get('/sales',[SalesController::class,'sales1']);
Route::get('/category',[CategoryController::class,'category']);
Route::get('category/food',[CategoryController::class,'food']);
Route::get('category/beauty',[CategoryController::class,'beauty']);
Route::get('category/homecare',[CategoryController::class,'homecare']);
Route::get('category/baby',[CategoryController::class,'baby']);

