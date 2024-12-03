<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function aboutUs() {
        return view('about-us');
    }
}
