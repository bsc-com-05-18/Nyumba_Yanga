@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row no-gutters">
        <div class="col-lg-5">
            <img src="{{ asset('images/logo.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-7 px-5 pt-3">
            <h3 class="font-weight-bold py-3">NYUMBA YANGA REAL ESTATE SYSTEM</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-row mb-2">
                        <div class="col-lg-7">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="First Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-2">
                            <div class="col-lg-7">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row mb-2">
                            <div class="col-lg-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row mb-2">
                            <div class="col-lg-7">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row mb-2">
                            <div class="col-lg-7">
                                <input id="accNumber" type="number" class="form-control @error('accNumber') is-invalid @enderror" placeholder="Account Number" name="accNumber" value="{{ old('accNumber') }}" required autocomplete="accNumber" autofocus>

                                @error('accNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row mb-2">
                            <div class="col-lg-7">
                                <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" placeholder="Occupation" name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation" autofocus>

                                @error('occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row mb-2">
                            <div class="col-lg-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row mb-2">
                            <div class="col-lg-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-row mb-2 d-flex justify-content-center">
                            <div class="col-lg-7">
                            <button type="submit" class="btn btn-success">
                                    {{ __('REGISTER') }}
                                </button>

                            </div>
                        </div>
                        <strong>
                        <p class="my-2 p-2">Already have an account? 
                            <a href="login" class="text-success text-gradient font-weight-bold">LOG IN</a></p>
                        </strong>
                    </form>
                    </div>
            </div>
        </div>

@endsection
@section('footer')
<footer class="main-footer">
    <hr>
        <div class="row">
            <div class="col-sm">
                <p class="text-center text-muted text-sm mt-auto">
                    Copyright &copy;  2023 Nyumba Yanga Real Estate System | All Rights Reserved. <br>
                    Developed and Designed by Nyumba Yanga Agency.
                </p>
            </div>
        </div>

  </footer>
@endsection
