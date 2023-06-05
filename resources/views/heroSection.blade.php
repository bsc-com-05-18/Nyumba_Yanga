<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
</head>
<body>
<section class="hero-section mx-5">
  <div class="container-fluid">
    <div class="row align-items-center ">
    <div class="p-5 text-center bg-image" style="
           background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
            height: 400px;
    ">
        <div class="mask mx-5" style="background-color: rgba(0, 0, 0, 0.6) ;">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white md-6 ">
                <h1 class="mb-3">Find Your Home</h1>
                <h4 class="mb-3">HELPING YOU FIND AND MANAGE YOUR DREAM HOUSE</h4>
            </div>
        </div> 
        </div>
        <div class="mt-5">
          <a class="btn btn-outline-light btn-lg" href="#!" role="button">For Sale</a>
          <a class="btn btn-outline-light btn-lg" href="#!" role="button">For Rent</a>
        </div >
    </div>

    <div class="text-center">
    <h3>Our Services</h3>
    </div>
    
    <div class="col-md-12 mx-auto d-flex text-center list-unstyled">  
      <div class=" mx-5 me-auto ms-auto">
        <h5>LANDLORD</h5>
        <ul class="list-unstyled text-lg-start">
            <<p>advertise properties</p>
            <p>Upload, Edit and delete property</p>
            <p>manage mantainance and Tenants</p>
            <p>Rent tracking & analysis</p>
        </ul>
      </div> 
      <div class=" mx-5 me-auto ms-auto">
        <h5>TENANT</h5>
        <ul class="list-unstyled p-3 text-lg-start">
            <li>
            <p>Find Accomodation</p>
            </li>
            <li>
            <p>Make Payment</p>
            </li>
            <li>
            <p>Report Maintainance</p>
            </li>     
        </ul>
      </div>
    </div>
  </div>
</div>
</section>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
@extends('layouts.app')

@section('content')
<!-- homepage -->
<div class="container-fluid">
    <div class="row align-items-center ">
    
        <div class="p-5 text-center bg-image img-fluid" style="
           background-image: {{ asset('images/home.jpg') }};
            height: 400px;">
        <div class="mask mx-auto mx-5 py-4 px-5 col-md-6 rounded justify-content-center" style="background-color: rgba(0, 0, 0, 0.6) ;">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white md-6 ">
                <h1 class="mb-3 text-uppercase">Find Your Home</h1>
                <h5 class="mb-3">HELPING YOU FIND AND MANAGE YOUR DREAM HOUSE</h5>
            </div>
        </div> 
        </div>
        <div class="mt-5">
          <a class="btn btn-lg text-white text-uppercase" style="color: #0caf12;" href="#!" role="button">For Sale</a>
          <a class="btn btn-lg text-white text-uppercase" style="color: #0caf12;" href="#!" role="button">For Rent</a>
        </div >
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center" style="font-weight: bold;">OUR SERVICES</h4>
            <div class="row">
                <div class="col-md-4 justify-content-center mx-auto">
                    <h5 class="card-subtitle mb-2" style="font-weight: bold;">Landlord Services</h5>
                    <ul>
                        <li class="text-capitalize">advertise properties</li>
                        <li class="text-capitalize">upload, edit and delete property</li>
                        <li class="text-capitalize">manage tenants and maintenance</li>
                        <li class="text-capitalize">rent tracking and analysis</li>
                        <a href="{{ route('landlord.landlordlogin') }}" class="card-link" style="color: #0caf12;">Landlord Portal</a>

                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="card-subtitle mb-2" style="font-weight: bold;">Tenant Services</h5>
                    <ul>
                        <li class="text-capitalize">Find Accommodation</li>
                        <li class="text-capitalize">make Payments</li>
                        <li class="text-capitalize">report maintenance</li>
                        <a href="{{ route('login') }}" class="card-link" style="color: #0caf12;">Tenant Portal</a>

                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- about and contacts -->
@endsection