<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '2341760181 - Luthfi Putra Mahardika';
    }

    public function articles($articleID) {
        return 'Halaman Artikel dengan ID ' .$articleID;
    }
}
