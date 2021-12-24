@extends('layouts.base')

@section('header')
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color:#364bb5;">
  <div class="container">
    <a class="navbar-brand" href="#">Lifeline Hospital</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav-fill w-100  mx-auto mb-2 mb-lg-0">
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          About Us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="about_us.html">Mission & Vision</a></li>
            <li><a class="dropdown-item" href="#">Message From Chairman</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">About Lifeline Hospital</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#resume">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#project">For Patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Career</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <div class="input-group  ">
              <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <button class="btn btn-outline-success" type="button" id="search">Search</button>
          </div>
        </li> 
        <li class="nav-item">
          <a href="http://127.0.0.1:8000/login" class="nav-link">Log in</a>
        </li> 
        <li class="nav-item"> 
          <a href ="http://127.0.0.1:8000/register" class="nav-link">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
  <section style="background-color:#316387">
      <div class="container text-white">
        <div class="row py-5 px-3">
          <div class="col-lg-4 ">
            <h5 class="mb-4">Contact Us</h5>
            <p>House #16, Road # 2, Dhanmondi R/A, Dhaka-1205, Bangladesh<br>
              Phone : 09613 787801, 09666 787801<br>
              E-mail : info@populardiagnostic.com
            </p>
          </div>

          <div class="col-lg-4">
            <h5 class="mb-4">Important Links</h5>
            <p>House #16, Road # 2, Dhanmondi R/A, Dhaka-1205, Bangladesh<br>
              Phone : 09613 787801, 09666 787801<br>
              E-mail : info@populardiagnostic.com
            </p>
          </div>
          <div class="col-lg-4">
            <h5 class="mb-4"> Quick Links</h5>
            <p>House #16, Road # 2, Dhanmondi R/A, Dhaka-1205, Bangladesh<br>
              Phone : 09613 787801, 09666 787801<br>
              E-mail : info@populardiagnostic.com
            </p>
          </div>
        </div>
      </div>
    </section> 
@endsection