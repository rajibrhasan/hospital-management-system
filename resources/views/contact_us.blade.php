@extends('layouts.base')

@section('header')
@include('navbar')

@endsection('header')

@section('content')
<div style="min-height: 650px;">
<div class="container" style="padding-top: 30px">
          <div class="row" >
        <div class="col-md-3">
          <img src="images/contact_us1.jpg" alt="" style=" padding-top: 70px; padding-left: 100px;">
        </div>
        <div class="col-md-8" style="padding-left: 250px;">
          <div class="container" > 
            <h1>
              Contact  Us
            </h1>
            <hr id="id6"> 
            <div class="text" style="font-size: larger;">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Please Enter Your Name">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Please Enter Your Phone Number">
          </div>
          
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Write Message..."></textarea>
          </div>
      
          <div class="col-auto">
            <button type="submit" class="btn btn-primary">Submit</button>
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
