@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Detail Customer I-Read</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="col-5">Nama</h4>
                <h4 class="col">: {{$customer->nama}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Alamat</h4>
                <h4 class="col">: {{$customer->alamat}} </h4>
            </div>
            <hr>
            <a href="{{route('customer.index')}}" class="btn btn-primary float-right">Kembali</a>
        </div>
    </div>
</div>
@endsection