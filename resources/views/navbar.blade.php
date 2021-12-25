

<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color:#364bb5;">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav-fill w-100  mx-auto mb-2 mb-lg-0">
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-weight: 550;">
          About Us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('/mission_&_vision')}}">Mission & Vision</a></li>
            <li><a class="dropdown-item" href="{{url('/message_from_chairman')}}" >Message From Chairman</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('/about_lifeline')}}">About Lifeline Hospital</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-weight: 550;">
          Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <li><a class="dropdown-item" href="{{url('/health_package')}}">Health Packages</a></li>
            <li><a class="dropdown-item" href="{{url('/test _and_service_chaeges')}}">Test and Service Chaeges</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('/blood_bank')}}">Blood Bank</a></li>
          </ul>
        </li>



        
        <li class="nav-item">
          <a class="nav-link" href="{{url('/gallery')}}" style="color: white; font-weight: 550;">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact" style="color: white; font-weight: 550;" >Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/career')}}" style="color: white; font-weight: 550;">Career</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/contact_us')}}" style="color: white; font-weight: 550;">Contact Us</a>
        </li>
        <li class="nav-item">
          <div class="input-group  ">
              <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <button class="btn btn-outline-success" type="button" id="search" style="color: white; background-color: #127958;">Search</button>
          </div>
        </li> 
        <li class="nav-item">
          <a href="http://127.0.0.1:8000/login" class="nav-link" style="color: white; font-weight: 550;">Log in</a>
        </li> 
        <li class="nav-item"> 
          <a href ="http://127.0.0.1:8000/register" class="nav-link" style="color: white; font-weight: 550;">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>