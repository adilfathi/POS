<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
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

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']); //menampilkan halaman awal level
    Route::post('/list', [LevelController::class, 'list']); //menampilkan data level dalam bentuk json untuk database
    Route::get('create', [LevelController::class, 'create']); //menampilkan halaman form tambah level
    Route::post('/', [LevelController::class, 'store']); //menyimpan data level baru
    Route::get('/{id}', [LevelController::class, 'show']); //menampilkan detail level
    Route::get('/{id}/edit', [LevelController::class, 'edit']); //menampilkan halaman form edit level
    Route::put('/{id}', [LevelController::class, 'update']); //menyimpan perubahan data level
    Route::delete('/{id}', [LevelController::class, 'destroy']); //menghapus data level
});

//modifikasi CRUD Kategori
Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']); //menampilkan halaman awal kategori
    Route::post('/list', [KategoriController::class, 'list']); //menampilkan data kategori dalam bentuk json untuk database
    Route::get('create', [KategoriController::class, 'create']); //menampilkan halaman form tambah
    Route::post('/', [KategoriController::class, 'store']); //menyimpan data kategori baru
    Route::get('/{id}', [KategoriController::class, 'show']); //menampilkan detail kategori
    Route::get('/{id}/edit', [KategoriController::class, 'edit']); //menampilkan halaman form edit k
    Route::put('/{id}', [KategoriController::class, 'update']); //menyimpan perubahan data kategori
    Route::delete('/{id}', [KategoriController::class, 'destroy']); //menghapus data kategori
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']); //menampilkan halaman awal barang
    Route::post('/list', [BarangController::class, 'list']); //menampilkan data barang dalam bentuk json untuk database
    Route::get('create', [BarangController::class, 'create']); //menampilkan halaman form tambah
    Route::post('/', [BarangController::class, 'store']); //menyimpan data barang baru
    Route::get('/{id}', [BarangController::class, 'show']); //menampilkan detail barang
    Route::get('/{id}/edit', [BarangController::class, 'edit']); //menampilkan halaman form edit barang
    Route::put('/{id}', [BarangController::class, 'update']); //menyimpan perubahan data barang
    Route::delete('/{id}', [BarangController::class, 'destroy']); //menghapus data barang
});

//JS 7 Tugas - Stok
Route::group(['prefix' => 'stok'], function () {
    Route::get('/', [StokController::class, 'index']); //menampilkan halaman awal stok
    Route::post('/list', [StokController::class, 'list']); //menampilkan data stok dalam bentuk json untuk database
    Route::get('create', [StokController::class, 'create']); //menampilkan halaman form tambah
    Route::post('/', [StokController::class, 'store']); //menyimpan data stok baru
    Route::get('/{id}', [StokController::class, 'show']); //menampilkan detail stok
    Route::get('/{id}/edit', [StokController::class, 'edit']); //menampilkan halaman form edit stok
    Route::put('/{id}', [StokController::class, 'update']); //menyimpan perubahan data stok
    Route::delete('/{id}', [StokController::class, 'destroy']); //menghapus data stok
});

//JS 7 Tugas - Transaksi
Route::group(['prefix' => 'transaksi'], function () {
    Route::get('/', [TransaksiController::class, 'index']); //menampilkan halaman awal transaksi
    Route::post('/list', [TransaksiController::class, 'list']); //menampilkan data transaksi dalam bentuk json untuk database
    Route::get('create', [TransaksiController::class, 'create']); //menampilkan halaman form tambah transaksi
    Route::post('/', [TransaksiController::class, 'store']); //menyimpan data transaksi baru
    Route::get('/{id}', [TransaksiController::class, 'show']); //menampilkan detail transaksi
    Route::get('/{id}/edit', [TransaksiController::class, 'edit']); //menampilkan halaman form edit transaksi
    Route::put('/{id}', [TransaksiController::class, 'update']); //menyimpan perubahan data transaksi
    Route::delete('/{id}', [TransaksiController::class, 'destroy']); //menghapus data transaksi
});
Route::get('login2', [AuthController::class, 'index'])->name('login');
Route::get('register2', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'cek_login:1'], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => 'cek_login:2'], function () {
        Route::resource('manager', ManagerController::class);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
