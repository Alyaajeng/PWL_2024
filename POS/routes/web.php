<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
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

// menambahkan route halaman home
Route::get('/', [HomeController::class, 'index']);

//menambahkan route halaman products 
Route::prefix('category')->group(function () {
    Route::get('/{category}', [ProductController::class, 'category']);
});

// menambahkan route halaman user 
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// menambahkan route halaman penjualan
Route::get('/sales', [SalesController::class, 'index']);

// DB FACADE
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/level', [LevelController:: class, 'index']);

    
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/level', [LevelController::class, 'index']);
    Route :: get('/kategori', [KategoriController :: class, 'index']);
    Route :: get('/user', [UserController :: class, 'index']);
