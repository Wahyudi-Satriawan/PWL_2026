<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'NIM: [244107020137] - Nama: Wahyudi Satriawan Hamid'; 
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}