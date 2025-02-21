<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        return "Nama: Alya Ajeng Ayu <br>NIM: 2341760119";
    }
}
