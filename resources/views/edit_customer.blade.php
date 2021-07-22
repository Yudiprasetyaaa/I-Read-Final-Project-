@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Data customer</h1>
        </div>
        <div class="card-body">
            <form action="{{route('customer.update', $customer->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="nama" required value="{{$customer->nama}}">
                    Alamat <input type="text" name="alamat" required value="{{$customer->alamat}}" >
                </ul>
                <hr>
                <a href="{{route('customer.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection