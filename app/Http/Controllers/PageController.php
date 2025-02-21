<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan halaman utama
    public function index()
    {
        return "Selamat Datang";
    }

    // Menampilkan halaman About dengan Nama dan NIM
    public function about()
    {
        return "Nama: Alya Ajeng Ayu <br>NIM: 2341760119";
    }

    // Menampilkan halaman artikel berdasarkan ID
    public function articles($id)
    {
        return "Halaman Artikel dengan ID: " . $id;
    }
}
