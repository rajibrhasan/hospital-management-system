@extends('sidebar')

@section('content')

<main>
  <div class="row">
    <div class="col-6">
      <div class="card">
        <img class="card-img-top"src="{{'images/car1.jpg'}}" style="height: 300px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Upcoming Appointments</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
        <img class="card-img-top"src="{{'images/car1.jpg'}}" style="height: 300px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">My Appointments</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    @foreach($doctors as $doctor)
    <div class="col-md-6">
      <div class="card" style="border-radius: 15px;">
        <div class="card-body">
          <h5 class="card-title">{{ $doctor->name }}</h5>
          <h3>{{ $doctor->speciality }}</h3>
          <h3>{{ $doctor->college }}</h3>
         
        </div>
      </div>
    </div>
    @endforeach

  </div>

</main>

@endsection