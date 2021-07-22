@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Buku I-Read</h3>
        </div>
        <div class="card-body">
            <a href="{{route('book.create')}}">[+]Add Book</a>
            <table class="table table-bordered ">
                <tr>
                    <th>Gambar</th>
                    <th>Buku</th>
                    <th>Kategori</th>
                    <th>Penerbit</th>
                    <th>Sinopsis</th>
                    <th>Aksi</th>
                </tr>
                @foreach($book as $bk)
                <tr>
                    <td class="text-center">
                        <img src="{{ Storage::url('public/').$bk->gambar }}" class="rounded" style="width: 150px">
                    </td>
                    <td>{{$bk->buku}}</td>
                    <td>{{$bk->kategori}}</td>
                    <td>{{$bk->penerbit}}</td>
                    <td>{{$bk->sinopsis}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('book.show', $bk->id)}}" class="btn btn-primary m-1">Show</a>
                            <a href="{{route('book.edit', $bk->id)}}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{route('book.destroy', $bk->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Hapus</button>
                            </form>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection