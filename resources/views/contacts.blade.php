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
                        <a href="" class="card-link" style="color: #0caf12;">Landlord Portal</a>

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


