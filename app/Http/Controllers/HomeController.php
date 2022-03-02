<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller 
{
    public function index() {
        return 'Selamat Datang di Website Rofiqoh Wahyuningtyas';
    }
    public function about() {
        return 'Nama : Rofiqoh wahyuningtyas 
        <br>
        NIM : 2041720217
        <br>
        Prodi : D4 Teknik Informatika
        <br>
        POLITEKNIK NEGERI MALANG';
    }
}