<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/user/{id}/name/{name}', function($id,$name){
    return view('user',['id' => $id, 'name' => $name]);
});
Route::get('/category',[CategoryController::class,'category']);
Route::get('category/food',[CategoryController::class,'food']);
Route::get('category/beauty',[CategoryController::class,'beauty']);
Route::get('category/homecare',[CategoryController::class,'homecare']);
Route::get('category/baby',[CategoryController::class,'baby']);