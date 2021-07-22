@extends('layouts.app')

@section('content')
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Data Buku</h3>
            <a href="{{route('book.create')}}">Add Book</a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Gambar</th>
                    <th>Buku</th>
                    <th>Kategori</th>
                    <th>Penerbit</th>
                    <th>Sinopsis</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
                @foreach ($book as $b)
                <tr>
                    {{-- <?php dd($b->gambar)?> --}}
                    <td class="text-center">
                        <img src="{{ Storage::url('public/').$b->gambar }}" class="rounded" style="width: 150px">
                    </td>
                    <td>{{$b->buku}}</td>
                    <td>{{$b->kategori}}</td>
                    <td>{{$b->penerbit}}</td>
                    <td>{{$b->sinopsis}}</td>
                    <td>{{$b->harga}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('book.show', $b->id)}}" class="btn btn-primary m-1">Show</a>
                            <a href="{{route('book.edit', $b->id)}}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{route('book.destroy', $b->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Delete</button>
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