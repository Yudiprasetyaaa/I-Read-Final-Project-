@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Data Buku</h1>
        </div>
        <div class="card-body">
            <form action="{{route('book.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Gambar   <input type="file" name="gambar" required value="{{$book->gambar}}">
                    Buku     <input type="text" name="buku" required value="{{$book->buku}}" >
                    Category
                    <select name="kategori"  required value="{{$book->kategori}}">
                        <option value="novel">Novel</option>
                        <option value="cergam">Picture Story</option>
                        <option value="Ensiklopedi">Encyclopedia</option>
                        <option value="comic">Comic</option>
                        <option value="antologi">Anthology</option>
                        <option value="biografi">Biography</option>
                    </select>
                    {{-- Kategori <input type="text" name="kategori" required value="{{$book->kategori}}" > --}}
                    Penerbit <input type="text" name="penerbit" required value="{{$book->penerbit}}" >
                    Sinopsis <input type="text" name="sinopsis" required value="{{$book->sinopsis}}" >
                    Harga    <input type="text" name="harga" required value="{{$book->harga}}" >
                </ul>
                <hr>
                <a href="{{route('book.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection