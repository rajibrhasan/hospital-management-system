<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    @stack('css')
        
  </head>
  <body>
    @yield('header')
    @yield('content')

    
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
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    @stack('script')
       
  </body>
</html>