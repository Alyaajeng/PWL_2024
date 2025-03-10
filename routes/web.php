<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

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

// basic routing //
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2341760119 , Alya Ajeng Ayu';
});


// Router parameter //
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});


// Optional Parameters //
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;   
});


// controller pada route
Route::get('/index', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles', [PageController::class,'articles']);

// single action controller
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

// resource controller
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// membuat view
Route::get('/greeting', function () {
	return view('hello', ['name' => 'Alya Ajeng']);
});

// view dalam direktori
Route::get('/greeting', function () {
	return view('blog.hello', ['name' => 'Alya Ajeng']);
});

//menampilkan view dari controller
Route::get('/greeting', [WelcomeController::class, 'greeting']);