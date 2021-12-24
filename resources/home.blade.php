<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color:#224cb5;">
        <div class="container">
          <a class="navbar-brand" href="#">Lifeline Hospital</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-fill w-100  mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link"  href="#about">About Us</a>
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
                <a class="nav-link" href="{{url('/contact_us')}}">Contact Us</a>
              </li>
              <li class="nav-item">
                <div class="input-group  ">
                  <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  <button class="btn btn-outline-success" type="button" id="button-addon1">Search</button>
              </div>
              </li>
              
            </ul>

            
           
          </div>
      </div>
    </nav>
    @section('home_content')
     <section>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="max-height: 50%;" >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{'images/car1.jpg'}}" class="d-block w-100" style="height: 500px;" alt="...">
          </div>
          <div class="carousel-item" >
            <img src="{{'images/car2.png'}}" class="d-block w-100" style="height: 500px;" alt="...">
            
          </div>
          <div class="carousel-item">
            <img src="{{'images/car3.jpg'}}" class="d-block w-100" style="height: 500px;" alt="...">
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
    <div class="main">
    <section class="container">
        <div class="row py-5">
          <div class="col-lg-4">
            <div class="card">
            <img class="card-img-top" src="{{'images/car1.jpg'}}" style="height: 300px;" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Search Doctor</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
            <img class="card-img-top" src="{{'images/car2.png'}}" style="height: 300px;" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Book Appointment</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
            <img class="card-img-top" src="{{'images/car3.jpg'}}" style="height: 300px;" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Service Charge</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
          </div>
        </div>
    </section>
    @endsection
    <section style="background-color:#316387">
      <div class="container text-white">
      <div class="row py-5 px-3">
        <div class="col-lg-4 ">
          <h5 class="mb-4">
            Contact Us
          </h5>

          <p>House #16, Road # 2, Dhanmondi R/A, Dhaka-1205, Bangladesh<br>
            Phone : 09613 787801, 09666 787801<br>
            E-mail : info@populardiagnostic.com
          </p>
        </div>
        <div class="col-lg-4">
          <h5 class="mb-4">
            Important Links
          </h5>
          <p>House #16, Road # 2, Dhanmondi R/A, Dhaka-1205, Bangladesh<br>
            Phone : 09613 787801, 09666 787801<br>
            E-mail : info@populardiagnostic.com
          </p>
        </div>
        <div class="col-lg-4">
          <h5 class="mb-4">
            Quick Links
          </h5>
          <p>House #16, Road # 2, Dhanmondi R/A, Dhaka-1205, Bangladesh<br>
            Phone : 09613 787801, 09666 787801<br>
            E-mail : info@populardiagnostic.com
          </p>
        </div>
      </div>
    </div>
    </section>

    </div>

    

      
    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       
  </body>
</html>