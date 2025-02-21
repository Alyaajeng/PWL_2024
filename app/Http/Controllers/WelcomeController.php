<?php

// Controller //
// Membuat Controller //
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function hello() {
        return 'Hello World';
    }

    public function greeting(){
        return view('blog.hello')
            ->with('name','Alya')
            ->with('occupation','Astronaut');
    }


}




