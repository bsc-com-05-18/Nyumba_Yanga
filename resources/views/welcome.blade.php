@extends('layouts.app')

@section('styles')

@endsection

@section('content')
<!-- homepage -->
<div class="overlay-black w-100 position-relative" style="background-image: url('images/home.jpg'); height: 500px; background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                        <div class="opacity-75 rounded px-5 py-3 mb-2 col-md-6 justify-content-center mx-auto" style="background-color: #000000;">
                            <h1 class="mb-2"><span class="text-white text-uppercase mx-3">find your home</span></h1><br>
                            <h5 class="text-white mx-3">Helping you find and manage your dream house</h5>
                        </div>
                            <form method="get" action="search">
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="type">
                                                <option value="">Select Type</option>
												<option value="girls">Girls' Hostel</option>
                                                <option value="boys">Boys Hostel</option>
												<option value="bedsitter">Bed Sitter</option>
												<option value="house">House</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="status">
                                                <option value="">Select Status</option>
												<option value="rent">Rent</option>
												<option value="sale">Sale</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="location" placeholder="Enter Location" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" name="filter" class="btn btn-success w-100" style="background-color: #027606">Search Property</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                        <a href="{{ route('landlord.landlordlogin') }}" class="card-link text-decoration-none" style="color: #027606;">Landlord Portal</a>

                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="card-subtitle mb-2" style="font-weight: bold;">Tenant Services</h5>
                    <ul>
                        <li class="text-capitalize">Find Accommodation</li>
                        <li class="text-capitalize">make Payments</li>
                        <li class="text-capitalize">report maintenance</li>
                        <a href="{{ route('login') }}" class="card-link text-decoration-none" style="color: #027606;">Tenant Portal</a>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- about and contacts -->
@endsection