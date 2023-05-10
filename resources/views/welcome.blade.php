@extends('layouts.app')

@section('content')
<!-- homepage -->
<div class="container-fluid">
    <div class="card text-bg-dark mt-0">
        <img src="{{ asset('images/home.jpg')}}" class="bg-img" alt="...">
        <div class="card-img-overlay">
            <div class="card-body mx-auto my-auto justify-content-center py-4 px-5 col-md-6">
                <div class="opacity-75 rounded my-5" style="background-color: black;">
                    <h5 class="card-title text-center text-white text-uppercase pt-3 pb-3 px-5" style="font-weight: bold; font-size: 30px;">find your home</h5>
                    <p class="card-text text-center text-white text-uppercase pb-3 px-5" style="font-weight: bold; font-size: 15px;">Helping you find and manage your dream house</p>        
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
                        <a href="#" class="card-link" style="color: #0caf12;">Landlord Portal</a>

                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="card-subtitle mb-2" style="font-weight: bold;">Tenant Services</h5>
                    <ul>
                        <li class="text-capitalize">Find Accommodation</li>
                        <li class="text-capitalize">make Payments</li>
                        <li class="text-capitalize">report maintenance</li>
                        <a href="#" class="card-link" style="color: #0caf12;">Tenant Portal</a>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about and contacts -->
@endsection