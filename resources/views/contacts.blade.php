@extends('layouts.app')

@section('content')
<!-- homepage -->
<div class="container-fluid">
    <div class="card text-bg-dark mt-0">
        <img src="{{ asset('images/contact.jpg')}}" class="bg-img" alt="...">
        <div class="card-img-overlay">
            <div class="card-body mx-start my-auto py-4 px-5 col-md-6">
                <div class="opacity-75 rounded my-5" style="background-color: black;">
                    <h5 class="card-text text-white text-capitalize pt-3 ps-3" style="font-size: 30px;">Nyumba Yanga Agency</h5>
                    <p class="card-text text-white ps-3" style="font-size: 15px;">
                    aims to give you an advertising platform to reach the <br>
                    right market. Our services extend to providing you with <br>
                    efficient communication and seamless online payment. <br>
                    Find your dream house with Nyumba Yanga!</p>        
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