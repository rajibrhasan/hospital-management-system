@extends('layouts.base')

@section('header')
@include('navbar')

@endsection('header')

@section('content')

<div class="container">
        <div class="row" style="padding-top: 80px;">
          <div class="col-md-7">
            <img src="image/mission_p1.webp" alt="" style="max-width: 500%;">
          </div>

          <div class="col-md-5">
            <h1>Vision</h1>
            <p>
              Our Vision is to bring healthcare of International standards in Bangladesh for a legacy of 
              accessible, high quality, safe private 
              healthcare for low and middle-income patients in emerging markets.  And also we want  
              to TOUCH the lives of the people. 
              <br>
              We serve through excellence in clinical care, quality and commitment.
          </p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row" style="padding-top: 100px;">
          <div class="col-md-6">
            <h1>Mission</h1>
            <p>
              
              <ul>
                <li>
                  To provide Hope, Care and Cure.
                </li>
                <li>
                  To provide compassionate, accessible, high quality, cost effective healthcare to one all.
                </li>
                <li>
                  To serve with a patient's first motto and to work towards a patient- centered care.
                </li>
                <li>
                  To develop, share and apply new knowledge and technology in the delivery of patient 
                  care through research and technology integration.
                </li>
                <li> 
                  To play an active role in promoting and improving health within our community and to 
                  build a strong, integrated system for regional health-care delivery.
                </li>
                <li>
                  To hold ourselves accountable to high standards those are observable, measurable and 
                  apply to all departments and employees of the hospital.
                </li>
                <li>
                  To be the centre of excellence for medical research and academics.
                </li>
                
               
              </ul>
            </p>
          </div>
          
          <div class="col-md-3">
            <img src="image/vission_p2.jpg" alt="" style="max-width: 250%;">
          </div>

          
        </div>
      </div>

@endsection('content')

@section('footer')
@include('footer')
@endsection('footer')