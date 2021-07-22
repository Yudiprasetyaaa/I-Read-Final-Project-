@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Add Customer</h1>
            <form action="{{route('customer.store')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="nama" required>
                    Alamat <input type="text" name="alamat" required>
                </ul>
                <hr>
                <a href="{{route('customer.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection