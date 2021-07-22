@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-100">
        @role('admin')
        <div class="card-header text-center">
            <h3>Book Detail</h3>
        </div>
        @endrole
        @role('seller')
        <div class="card-header text-center">
            <h3>Book Detail</h3>
        </div>
        @endrole
        <div class="card-header">
            <h1 class="col font-weight-bold text-center">{{$book->buku}} </h1>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="col"><img src="{{ Storage::url('public/').$book->gambar }}" style="width: 100%" alt=""></h4>
            </div>
            <div class="row ">
                <h6 class="col badge badge-dark text-center"> Author : {{$book->penerbit}} </h6>
            </div>
            <div class="row">
                <h6 class="col text-center">Category : {{$book->kategori}} </h6>
            </div>
            <div class="row">
                <h4 class="col text-justify"> {{$book->sinopsis}} </h4>
            </div>
            <div class="row">
                <h3 class="col font-italic text-right">Price : Rp. {{$book->harga}} ,-</h3>
            </div>
            <hr>
            <a href="{{route('home')}}" class="btn btn-primary float-right" >Back</a>
        </div>
    </div>
</div>
@endsection