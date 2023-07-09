@extends('layouts.master')

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
<div class="container-fluid" style="min-height: 75vh; margin: 0; padding: 0;">
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
                                    {{ Auth::guard('web')->user()->name.'  '.Auth::guard('web')->user()->last_name}}

                                </div>
                            
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col">
                                    {{ Auth::guard('web')->user()->email}}

                                </div>
                                
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone Number</h6>
                                </div>
                                <div class="col">
                                    {{ Auth::guard('web')->user()->phone}}

                                </div>
                                <div class="col-sm-9 text-secondary">
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Occupation</h6>
                                </div>
                                <div class="col">
                                    {{ Auth::guard('web')->user()->occupation}}

                                </div>
                                <div class="col-sm-9 text-secondary">
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#changePassword">Change Password</button>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="changePasswordLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="changePasswordLabel">Change Password</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        @if (session('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                            <!-- ... -->
                                            <form method="POST" action="change-password-tenant">
                                            @csrf
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="input-group input-group-outline my-3">
                                                            <input type="password" name="current_password" id="current_password" placeholder="Current Password" class="form-control{{  $errors->has('current_password') ? ' is-invalid' : '' }}" required>
                                                            @if ($errors->has('current_password'))
                                                            <div class="invalid-feedback">{{  $errors->first('current_password') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="input-group input-group-outline my-3">
                                                            <input type="password" name="new_password" id="new_password" placeholder="New Password" class="form-control{{  $errors->has('new_password') ? ' is-invalid' : '' }}" required>
                                                            @if ($errors->has('new_password'))
                                                            <div class="invalid-feedback">{{  $errors->first('new_password') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="input-group input-group-outline my-3">
                                                            <input type="password" name="new_password_confirmation" id="new_password_confirmation" placeholder="Confirm New Password" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            <!--  -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Save changes</button>
                                        </div>
                                        </form>

                                        </div>
                                    </div>
                                    <!--  -->
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
