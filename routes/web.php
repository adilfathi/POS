<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/',[WelcomeController::class,'index']);
Route::get('/dashboard',[WelcomeController::class,'dashboard']);
Route::get('/level',[LevelController::class,'index']);
Route::get('/level/tambah',[LevelController::class,'tambah']);

Route::post('/kategori',[KategoriController::class,'store']);
Route::get('/kategori/create',[KategoriController::class,'create']);
Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/update/{id}',[KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/delete/{id}',[KategoriController::class, 'delete'])->name('kategori.delete');

Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/kategori',[KategoriController::class,'index']);

Route::get('/user',[UserController::class,'index']);
// Route::get('/user/tambah',[UserController::class,'tambah']);
Route::post('/user/tambah_simpan',[UserController::class,'tambah_simpan']);
Route::get('/user/ubah/{id}',[UserController::class,'ubah']);
Route::put('/user/ubah_simpan/{id}',[UserController::class,'ubah_simpan']);
Route::get('/user/hapus/{id}',[UserController::class,'hapus']);
Route::get('/user/tambah',[UserController::class,'create']);

Route::resource('/m_user',POSController::class);

// Route::get('/user/{id}/name/{name}',[UserController::class,'user']);
Route::get('/sales',[SalesController::class,'sales1']);
Route::get('/category',[CategoryController::class,'category']);
Route::get('category/food',[CategoryController::class,'food']);
Route::get('category/beauty',[CategoryController::class,'beauty']);
Route::get('category/homecare',[CategoryController::class,'homecare']);
Route::get('category/baby',[CategoryController::class,'baby']);

Route::group(['prefix' => 'user'],function(){
    Route::get('/',[UserController::class,'index']);
    Route::post('/list',[UserController::class,'list']);
    Route::get('/create',[UserController::class,'create']);
    Route::post('/',[UserController::class,'store']);
    Route::get('/{id}',[UserController::class,'show']);
    Route::get('/{id}/edit',[UserController::class,'edit']);
    Route::put('/{id}',[UserController::class,'update']);
    Route::delete('/{id}',[UserController::class,'destroy']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
