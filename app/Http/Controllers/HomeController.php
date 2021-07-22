<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function home()
    {
        $databook = Book::all();
        return view('home', ['book' => $databook]);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $databook = Book::all();
        return view('home', ['book' => $databook]);
    }
    public function aboutus()
    {
        return view('prfl');
    }
}
