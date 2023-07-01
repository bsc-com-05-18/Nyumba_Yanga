@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="{{ asset('images/logo.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-3">
                    <h3 class="font-weight-bold py-3">NYUMBA YANGA REAL ESTATE SYSTEM</h3>
                    <h4>Landlord Portal</h4>
                    <form method="POST" action="{{ route('landlord.landlordlogin') }}">
                    @csrf
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror my-3 p-2" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror my-3 p-2" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="form-row">
                            <div class="col-lg-7 my-2 p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-row mb-3 d-flex justify-content-center">
                            <div class="col-lg-7">
                            <button type="submit" class="btn btn-success">
                                    {{ __('LOG IN') }}
                                </button>

                            </div>
                        </div>
                        <strong>
                        <a href="#" class="my-3 p-2">Forgot Your Password?</a>
                        <p class="my-2 p-2">Don't have an account? 
                            <a href="register" class="text-success text-gradient font-weight-bold">REGISTER HERE</a></p>
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

