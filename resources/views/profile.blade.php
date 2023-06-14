@extends('landlord.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-6">
            <li class="breadcrumb-item text-sm"><a class="opacity-6 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profile</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Profile</h6>
        </nav>
@endsection

@section('content')
<div class="container text-muted">
    <div class="content-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-center">User Profile</h5>     
                    </div>
                    <div class="row">
                        <div class="col-4 class">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/undraw_profile.svg') }}" alt="" class="rounded" width="250px" height="250px">                               
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="file">                            
                            </div>
                            
                        </div>
                        <div class="col-8">
                            <!-- Content Row -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Name</h6>
                                </div>
                                <div class="col">
                                    {{ Auth::guard('landlord')->user()->name.'  '.Auth::guard('landlord')->user()->last_name}}

                                </div>
                            
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col">
                                    {{ Auth::guard('landlord')->user()->email}}

                                </div>
                                
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone Number</h6>
                                </div>
                                <div class="col">
                                    {{ Auth::guard('landlord')->user()->phone}}

                                </div>
                                <div class="col-sm-9 text-secondary">
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Account Number</h6>
                                </div>
                                <div class="col">
                                    {{ Auth::guard('landlord')->user()->phone}}

                                </div>
                                <div class="col-sm-9 text-secondary">
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#changePassword">Change Password</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>      
            
</div>

@endsection

@section('footer')
               
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
