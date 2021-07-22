@extends('layouts.app')

@section('content')
<body>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('storage/cover1.png')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('storage/cover2.png')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('storage/cover3.png')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<br>
<marquee><h3 class="font-italic"> Welcome To I-Read : Because You're Worth It</h3> </marquee>
<div class="container">
  <div class="row">
    @foreach($book as $b)
    <div class="col-lg-4">
        <img src="{{ Storage::url('public/').$b->gambar }}" alt="" style="height: 250px; object-fit:contain; width:100%">
        <h3 class = "col font-weight-bold text-center">{{$b->buku}}</h3>
        <p class="text-justify">{{$b->sinopsis}}</p>
        <center><a href="{{route('view.show', $b->id)}}" class="btn btn-outline-primary m-2">View</a>
    </div>
    @endforeach
  </div>
</div>
</body>
@endsection