<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nyumba_Yanga_Website') }}</title>
    <link href="{{ asset('images/logo2.png') }}" rel="shortcut icon">

  <!-- Font Awesome Icons -->
  <link href="{{ asset('custom/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('noteicon.png') }}" rel="small icon">

</head>
<!-- 4f805d -->

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-#0CAF12 shadow-sm opacity-75 mb-0"  style="background: #0CAF12;">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png')}}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                    NYUMBA YANGA AGENCY
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    PROPERTIES
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="sell">FOR SALE</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">FOR RENT </a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="contacts">CONTACTS</a>
                </li>
                <li class="nav-item">
                    <a href="option">
                        <button type="button" class="btn btn-light">LOG IN</button>
                    </a>
                </li>
                        <!-- Authentication Links -->
                    
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @yield('footer')
  <footer class="main-footer">
    <hr>
    <div class="container-fluid opacity-50" style="background-color: #0CAF12;">
            <div class="row justify-content-center text-center text-light">
                <div class="col-md-4">
                    <div class="footer-copyright">
                        <p>Landlord Portal</p>
                        <p>Tenant Portal</p>
                        <p>Log in</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-copyright">
                        <p>Properties</p>
                        <p>Registration</p>
                        <p>Make payments</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-copyright">
                    <p><i class="fa-brands fa-facebook"></i> Nyumba Yanga</p>
                        <p><i class="fa-brands fa-twitter"></i> Nyumba Yanga</p>
                        <p><i class="fa-brands fa-square-instagram"></i> nyumba_yanga</p>
                        <p><i class="fa-solid fa-envelope"></i>  nyumba-yanga@gmail.com</p>                    
                    </div>
                </div>
                <div class="footer-copyright">
                    <p class="text-center text-sm mt-auto">
                        Copyright &copy;  2023 Nyumba Yanga Real Estate System | All Rights Reserved. <br>
                        Developed and Designed by Nyumba Yanga Agency.
                    </p>                                      
                    </div>

            </div>

        </div>

    </div>

  <script src= "{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.1.0')}}"></script>

 
</body>
</html>
