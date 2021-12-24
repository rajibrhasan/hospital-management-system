@extends('layouts.base')

@section('header')
@include('navbar')

@endsection('header')

@section('content')

<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" >
      <div class="carousel-item active">
        <img src="{{'images/car1.jpg'}}" class="d-inline-block h-50" style="width: 100%" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{'images/car2.png'}}" class="d-inline-block  h-50"  style="width: 100%"  alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{'images/car3.jpg'}}" class="d-inline-block  h-50" style="width: 100%"  alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>    
</section>

<section class="container">
  <div class="row py-5">
    <div class="col-lg-4">
      <div class="card">
        <img class="card-img-top"src="{{'images/car1.jpg'}}" style="height: 300px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Search Doctor</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <img class="card-img-top" src="{{'images/car2.png'}}" style="height: 300px;"alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Book Appointment</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <img class="card-img-top"src="{{'images/car3.jpg'}}" style="height: 300px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Service Charge</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection('content')

@section('footer')
@include('footer')
@endsection('footer')
