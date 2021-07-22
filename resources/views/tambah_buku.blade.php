@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Add Book</h1>
            <form action="{{route('book.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Gambar <input type="file" name="gambar" required>
                    Buku <input type="text" name="buku" required>
                    Category
                    <select name="kategori">
                        <option value="novel">Novel</option>
                        <option value="cergam">Picture Story</option>
                        <option value="Ensiklopedi">Encyclopedia</option>
                        <option value="comic">Comic</option>
                        <option value="antologi">Anthology</option>
                        <option value="biografi">Biography</option>
                    </select>
                    Penerbit <input type="penerbit" name="penerbit" required>
                    Sinopsis <textarea name="sinopsis" required></textarea>
                    Harga <input type="harga" name="harga" required>
                </ul>
                <hr>
                <a href="{{route('book.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection