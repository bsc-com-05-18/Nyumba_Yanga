@extends('layouts.app')

@section('content')
<div class="overlay-black w-100 position-relative" style="background-image: url('images/contact.jpg'); height: 500px; background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                        <div class="opacity-75 rounded px-5 py-1 mb-2 col-md-6" style="background-color: #000000;">
                            <h5 class="text-capitalize pt-3 ps-3" style="font-size: 30px; color: #0caf12;">Nyumba Yanga Agency</h5>
                            <p class="text-white ps-3" style="font-size: 15px;">
                            aims to give you an advertising platform to reach the <br>
                            right market. Our services extend to providing you with <br>
                            efficient communication and seamless online payment. <br>
                            Find your dream house with Nyumba Yanga!</p>  
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
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
@endsection


<!-- <div class="container-fluid">
<div class="full-row">
            <div class="container">
                
				
				<div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4">ABOUT US</h3>
                    </div>
                </div>
                <div class="row about-company">
                    <div class="col-md-12 col-lg-6">
                        <div class="about-content">
                            <h5 class="text-capitalize pt-3 ps-3" style="font-size: 30px; color: #0caf12;">Nyumba Yanga Agency</h5>
                            <p class="text-dark ps-3" style="font-size: 15px;">
                            aims to give you an advertising platform to reach the <br>
                            right market. Our services extend to providing you with <br>
                            efficient communication and seamless online payment. <br>
                            Find your dream house with Nyumba Yanga!</p>      
                        </div><br>
                        <div class="row mx-auto justify-content-center">
                            <div class="col-md-7 col-lg-3">
                                <i class="fa-brands fa-facebook fa-2x" style="color: #3b5998;"></i>
                            </div>
                            <div class="col-md-7 col-lg-3">
                                <i class="fa-brands fa-square-instagram fa-2x" style="color: #E1306C;"></i>
                            </div>
                            <div class="col-md-7 col-lg-3">
                                <i class="fa-brands fa-twitter fa-2x" style="color: #1DA1F2;"></i>
                            </div>
                            <div class="col-md-7 col-lg-3">
                                <i class="fa-solid fa-envelope fa-2x" style="color: #FD1D1D;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 mt-6">
                        <div class="about-img"> <img src="{{ asset('images/contact.jpg')}}" style="width: 100%; height: 300px;" alt="..."> </div>
                    </div>
                </div>
				
				
				
            </div>
</div> -->