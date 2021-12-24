@extends('layouts.base')

@section('header')
@include('navbar')

@endsection('header')

@section('content')
<div style="min-height: 500px;">
<h1 style="padding-left: 123px; padding-top: 20px;"> Blood Bank Information</h1>

    <div class="container" style="padding-top: 30px">
      <div class="row">
        <div class="col-md-5">
          <img src="image/blood_bank.jpg" alt="" style="max-width: 100%" />
        </div>

        <div class="col-md-6">
          <div class="container">
            <div class="row">
              
                <div class="col-md-2">A+</div>
                <div class="col-md-9">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                      10 bags
                    </div>
                  
                </div>
              </div>
            </div>


            <div class="row">
              
                <div class="col-md-2">A-</div>
                <div class="col-md-9">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">
                      8 bags
                    </div>
                  
                </div>
              </div>
            </div>


            <div class="row">
              
                <div class="col-md-2">B+</div>
                <div class="col-md-9">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      25 bags
                    </div>
                  
                </div>
              </div>
            </div>

            <div class="row">
              
                <div class="col-md-2">B-</div>
                <div class="col-md-9">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                      15 bags
                    </div>
                  
                </div>
              </div>
            </div>

            <div class="row">
              
                <div class="col-md-2">O+</div>
                <div class="col-md-9">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                      10 bags
                    </div>
                  
                </div>
              </div>
            </div>

            <div class="row">
              
                <div class="col-md-2">O-</div>
                <div class="col-md-9">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">
                      12 bags
                    </div>
                  
                </div>
              </div>
            </div>

            <div class="row">
              
                <div class="col-md-2">AB+</div>
                <div class="col-md-9">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">
                      14 bags
                    </div>
                  
                </div>
              </div>
            </div>

            <div class="row">
              
                <div class="col-md-2">AB-</div>
                <div class="col-md-9">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                     20 bags
                    </div>
                  
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>
    </div>

    </div>

@endsection('content')

@section('footer')
@include('footer')
@endsection('footer')