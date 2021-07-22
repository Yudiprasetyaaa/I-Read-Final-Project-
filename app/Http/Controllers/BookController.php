<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('seller') or $user->hasRole('admin')) {
            // dapat mengakses data galeri
            $databook = Book::all();
            return view('index', ['book' => $databook]);
        } else {
            // dialihkan ke halaman beranda
            $databook = Book::all();
            return view('home', ['book' => $databook]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambah_buku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Book::create([
            'gambar' => $request->gambar,
            'buku' => $request->buku,
            'kategori' => $request->kategori,
            'penerbit' => $request->penerbit,
            'sinopsis' => $request->sinopsis,
            'harga' => $request->harga,
        ]);

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::where('id', $id)->first();
        return view('detail_buku', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $databook = Book::find($id);
        return view('edit_buku', ['book' => $databook]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->gambar = $request->gambar;
        $book->buku = $request->buku;
        $book->kategori = $request->kategori;
        $book->penerbit = $request->penerbit;
        $book->sinopsis = $request->sinopsis;
        $book->harga = $request->harga;
        $book->save();

        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('book.index');
    }
}
