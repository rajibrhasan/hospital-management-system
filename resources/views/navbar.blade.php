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
            <li><a class="dropdown-item" href="{{url('/about_lifeline')}}">About Lifeline Hospital</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <li><a class="dropdown-item" href="{{url('/ health_package')}}">Health Packages</a></li>
            <li><a class="dropdown-item" href="#">Test and Service Chaeges</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('/blood_bank')}}">Blood Bank</a></li>
          </ul>
        </li>



        
        <li class="nav-item">
          <a class="nav-link" href="#project">For Patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/career')}}">Career</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/contact_us')}}">Contact Us</a>
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