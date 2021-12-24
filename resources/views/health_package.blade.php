
@extends('layouts.base')

@section('header')
@include('navbar')

@endsection('header')

@section('content')
<div style="min-height: 1000px; padding-bottom: 100px;">
<h1 style="padding-left: 115px; padding-top: 20px;padding-bottom: 10px;">Lifeline Health Check-up Packages</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-6">

          <div class="card" style="width: 25rem; background-color: #2959C2; color: white;">
            
            <div class="card-body" >
              <h5 class="card-title">Why do we need health check-up:<hr></h5>
              <p class="card-text">
                In this present day and age, we face many physical problems in our day-to-day life. 
                Most of the time, we try to do many experiments instead of consulting a doctor whenever we see any 
                symptoms. It might seem to be an easy and temporary solution, but it might cause some major problems 
                in the long run. Besides, some symptoms might not even be visible. Through health check-ups, we can 
                determine any internal issues of the body and also why it is happening. That's why we should do health 
                check-ups at least once each year in order to avoid complications later on. Lifeline Hospital has various 
                health check-up packages for all groups to people and we are always with you by your side.
              </p>
            </div>
          </div>

        </div>
        <div class="col-md-6">
          
          <div class="card" style="width: 25rem; background-color: #2959C2; color: white;">
            
            <div class="card-body" >
              <h5 class="card-title">Preparations before going for a health check-up:<hr></h5>
              <p class="card-text">
                <ul>
                  <li>
                    Contact with Lifeline's reception center to know more about health check-ups
                  </li>
                  <li>
                    You should not eat for 8-10 hours in advance for the tests Fasting Blood Sugar, 
                    Lipid Profile, USG Whole Abdomen etc.
                  </li>
                  <li>
                    For Random Blood Sugar (RBS) test, you need to give blood after 1 - 1.5 hours
                  </li>
                  <li>
                    For Exercise Tolerance Test (ETT), except live-saving medicines you should not eat any  
                    other medicines, cigerettes, milk, tea, coffee or any liquids.
                  </li>
                  <li>
                    Let us know in advance if you have diabetes or heart diseases.
                  </li>

                </ul>
              </p>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <div class="container" style="padding-top: 20px;">
      <div class="row">
        <div class="col">

          <div class="card" style="width: 25rem; background-color: #2959C2; color: white;">
            
            <div class="card-body">
              <h5 class="card-title">Primary Health Check-up Package-1 <hr>
              </h5>
              <p class="card-text">
                <ul>
                  <li>
                    Complete Blood Count (CBC)
                  </li>
                  <li>
                    Blood Sugar (Fasting & 2 hrs ABF) 
                  </li>
                  <li>
                    Lipid Profile (Fasting) 
                  </li>
                  <li>
                    Blood Grouping & Rh Factor 
                  </li>
                  <li>
                    HBsAg
                  </li>
                  <li>
                    SGPT
                  </li>
                  <li>
                    Serum Bilirubin (Total) 
                  </li>
                  <li>
                    Serum Uric Acid 
                  </li>
                  <li>
                    Serum Creatinine 
                  </li>
                  <li>
                    Urine R/E 
                  </li>
                  <li>
                    ECG 
                  </li>
                  <li>
                    X-Ray Chest PA View (Digital)
                  </li>
                  <li>
                    Ultrasonography of Whole Abdomen
                  </li>
                </ul>
                <hr>
                <h3>Package Price = 5,200/=</h3>
              </p>
            </div>
          </div>

        </div>
        <div class="col">
          
          <div class="card" style="width: 25rem; background-color: #2959C2; color: white;">
            
            <div class="card-body">
              <h5 class="card-title">Primary Health Check-up Package-2 <hr></h5>
              <p class="card-text">
                <ul>
                  <li>
                    Complete Blood Count (CBC) 
                  </li>
                  <li>
                    Random Blood Sugar
                  </li>
                  <li>
                    Lipid Profile (Random)
                  </li>
                  <li>
                    Blood Grouping & Rh Factor 
                  </li>
                  
                  <li>
                    Serum Creatinine 
                  </li>
                  <li>
                    HBsAg
                  </li>
                  <li>
                    SGPT
                  </li>
                  <li>
                    Serum Bilirubin (Total) 
                  </li>
                  <li>
                    Urine R/E
                  </li>
                  <li>
                    SGPT
                  </li>
                  <li>
                    Serum Bilirubin (Total) 
                  </li>
                 
                  <li>
                    X-Ray Chest PA View (Digital)
                  </li>
                  <li>
                    Ultrasonography of Whole Abdomen
                  </li>
                </ul>
                <hr>
                <h3>Package Price = 4,200/=</h3>
              </p>
              <a href="#" ></a>
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