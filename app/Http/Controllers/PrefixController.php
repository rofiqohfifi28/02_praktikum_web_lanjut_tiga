<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;
class PrefixController extends Controller 
{
    public function edugames() {
        return 'Ini adalah halaman marbel edu games';
    }
    public function kidsgames() {
        return 'Ini adalah halaman marbel and friends kids games';
    }
    public function storybooks() {
        return 'Ini adalah halaman riri story book';
    }
    public function kidsong() {
        return 'Ini adalah halaman kolak kids song';
    }

    public function karir() {
        return 'Cari karirmu disini';
    }
    public function magang() {
        return 'Go get intership here!';
    }
    public function kunjungan() {
        return 'List Kunjungan industri PT.Afa Collection';
    }

}