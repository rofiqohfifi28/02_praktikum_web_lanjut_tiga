<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index() {
        return '<a href="https://www.educastudio.com/contact-us">Contact us</a>';
    }
}