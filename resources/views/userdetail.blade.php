@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-100">
        <div class="card-header">
            <h3>User Detail</h3>
        </div>
        <div class="card-body">
            <div class="row ">
                <h4 class="col font-weight-bold text-center">Nama : {{$user->name}} </h4>
            </div>
            <div class="row ">
                <h4 class="col font-weight-bold text-center"> Email : {{$user->email}} </h4>
            </div>
            <div class="row">
                <p class="col font-weight-bold badge badge-dark text-center">Role : {{$user->role}} </p>
            </div>
            <hr>
            <a href="{{route('users.index')}}" class="btn btn-primary float-right" >Back</a>
        </div>
    </div>
</div>
@endsection