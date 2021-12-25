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
    <div class="carousel-inner" style="height:500px;" >
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
        <img class="card-img-top"src="{{'images/appointment.jpg'}}" style="height: 250px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Don't Delay Care</h5>
          <p class="card-text">Maintaining the safest environment possible at all our facilities is a top priority. 
            You don't have to wait to get the health care you need.
          </p>
          <a href="#" class="btn btn-primary">Book Appointment</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <img class="card-img-top" src="{{'images/view_doctor.jpg'}}" style="height: 250px;"alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Primary Care Network</h5>
          <p class="card-text">Searching the web for a medical diagonsis? Get here the best doctor with their amazing behaviour. </p>
          <a href="#" class="btn btn-primary">View Doctors</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <img class="card-img-top"src="{{'images/car4.jpg'}}" style="height: 250px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Service Charge</h5>
          <p class="card-text">Get to know about our service charges, emergency care and other haelth package charges in single click.</p>
          <a href="{{url('/test _and_service_chaeges')}}" class="btn btn-primary">Service Charge</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection('content')

@section('footer')
@include('footer')
@endsection('footer')
