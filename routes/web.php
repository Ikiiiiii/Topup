<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [UserController::class,'login']);
Route::post('auth', [UserController::class,'auth']);
Route::get('register', [UserController::class,'daftar']);
Route::post('register/create', [UserController::class,'create']);
Route::post('logout', [UserController::class,'logout']);

Route::get('admin', function () {
    return view('admin');
});

Route::get('detail', [ProductController::class, 'detail']);

Route::get('product', [ProductController::class,'show']);
Route::get('product/add', [ProductController::class,'add']);
Route::post('product/create', [ProductController::class, 'create']);
Route::get('product/delete/{id}', [ProductController::class,'delete']);
Route::get('product/edit/{id}', [ProductController::class,'edit']);
Route::post('product/update/{id}', [ProductController::class,'update']);
Route::get('topup', [ProductController::class,'tampil']);