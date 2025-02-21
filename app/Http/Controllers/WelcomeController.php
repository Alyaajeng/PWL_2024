<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function hello() {
        return 'Hello World';
    }
}

Route::get('/hello', [WelcomeController::class,'hello']);