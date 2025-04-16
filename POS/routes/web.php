<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);

// Route halaman kategori produk
Route::prefix('category')->group(function () {
    Route::get('/{category}', [ProductController::class, 'category']);
});

// Route halaman user
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// Route halaman penjualan
Route::get('/sales', [SalesController::class, 'index']);

// Route database facade
Route::get('/level', [LevelController::class, 'index']);

// **CRUD User**
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']); // Perbaikan
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

Route::get('/', function () {
    return view('welcome'); // Sesuaikan dengan file view yang ada
});

Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);

Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

