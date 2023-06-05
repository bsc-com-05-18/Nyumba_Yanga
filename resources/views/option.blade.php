@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
</div>
<div class="row d-flex justify-content-center">
    <div class="col-lg-10 col-md-12">
        <div class="card ">
            <div class="card text-center">
                
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-dark" style="font-size: 24px;">nyumba yanga real estate system</h5>
                    <h6 class="card-title text-uppercase text-dark" style="font-size: 18px;">register as</h6>
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6 mt-4 mb-1">
                        <a href="" class="text-decoration-none">
                            <div class="card z-index-2 text-dark">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gray-400 shadow-success border-radius-lg py-3 pe-1 text-center">
                                    <i class="fa-solid fa-user fa-10x my-4 mx-4"></i>
                                </div>
                                <div class="text-center">
                                    <p class="font-weight-bold">Landlord</p>
                                </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-6 mt-4 mb-1">
                        <a href="{{ route('register') }}" class="text-decoration-none">
                            <div class="card z-index-2 text-dark">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gray-400 shadow-success border-radius-lg py-3 pe-1 text-center">
                                <i class="fa-regular fa-user fa-10x my-4 mx-4"></i>
                                </div>
                                <div class="text-center">
                                    <p class="font-weight-bold">Tenant</p>
                                </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

