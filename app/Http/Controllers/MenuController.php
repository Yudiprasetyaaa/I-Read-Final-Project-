<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function beranda()
    {
        return view('home');
    }
    public function aboutus()
    {
        return view('prfl');
    }

}
