
@extends('layouts.base')

@section('header')
@include('navbar')

@endsection('header')

@section('content')
<div style="min-height: 650px;">
        <div class="row" style="padding-top: 35px; ">
          <div class="col-md-3" style="padding-top: 60px;">
            <img src="images/about_lifeline.jpg" alt="" style="max-width: 180%; padding-left: 80px;">
          </div>

          <div class="col-md-8" style="padding-left: 300px; font-size: large; ">
            <h1 style="padding-right: 20px;">About Lifeline Hospital</h1>
            
            <p>
                Lifeline Hospital is present in over 25 cities, with 30+ hospitals, 15 clinics and 50+ diagnostic centers 
                across 2 continents, in their mission to provide quality healthcare in emerging markets.
          </p>
          <p>
            Lifeline Hospital Dhaka is the first and only hospital to be accredited by the Joint 
            Commission International (JCI) 5 times in a row. The JCI Gold Seal of Approval is a globally 
            recognized and reflects an organizations commitment to best practices in quality and patient safety. 
            Lifeline Hospital Dhaka was first accredited by JCI in 2008 and till date remains the only hospital in 
            Bangladesh to hold this international recognized standard. Accreditation by recognized international 
            institutions such as JCI are crucial to drive compliance and improve quality and cost-effectiveness across the 
            hospitals and has become a priority for healthcare organizations across the world.
          </p>
          <p>
            It is a 425-bed multi-disciplinary super-specialty tertiary care hospital 
            in Bangladesh, providing comprehensive health care with the latest medical, surgical 
            and diagnostic facilities. These services are provided by expert medical professionals, 
            skilled nurses and technologists using state-of-the-art equipment, modern well researched protocols & processes. 
            The eleven-storied modern structure with 435,000 square feet floor space, was conceptualized & designed by renowned 
            architecture company Smith 
            Group of United States of America.
          </p>
          <p>
            Lifeline Hospital Dhaka is a world-class hospital with an aim to establish a 
            close synergy among medical skills, trained manpower, technology and advancements in IT. Because
             we believe in Transforming Healthcare.
          </p>
          </div>
        </div>
      </div>


          
        </div>
        </div>
      
      @endsection('content')

@section('footer')
@include('footer')
@endsection('footer')