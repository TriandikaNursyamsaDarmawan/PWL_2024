<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() { 
        return 'Selamat Datang'; 
} 
    public function about() {
        return 'Triandika Nursyamsa Darmawan | 2141762094';
}

    public function articles($id) { 
        return 'Halaman Artikel dengan ID '. $id;
}
}