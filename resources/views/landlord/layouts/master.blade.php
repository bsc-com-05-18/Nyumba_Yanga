<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Nyumba_Yanga_Website') }}</title>
    <link href="{{ asset('images/logo.png') }}" rel="shortcut icon">

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <link href="{{ asset('custom/fontawesome/css/all.min.css') }}" rel="stylesheet">

  
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href="{{url('/')}}/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />

  
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  @yield('styles')
</head>

<body class="g-sidenav-show  bg-white">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-success" id="sidenav-main" style="background-color: #0CAF12;">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{ asset('images/logo.png') }}" class="navbar-brand-img h-100 border-radius-xl" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Nyumba Yanga </span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link text-white" href="home">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-house"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="image-upload">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-square-plus"></i>
            </div>
            <span class="nav-link-text ms-1">Add Property</span>
          </a>
        </li>   
        <li class="nav-item">
          <a class="nav-link text-white" href="myproperties">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-house-chimney"></i>
            </div>
            <span class="nav-link-text ms-1">My Properties</span>
            <!-- <i class="fa-solid fa-user-plus"></i> -->
          </a>
        </li>        
        
        <li class="nav-item">
          <a class="nav-link text-white " href="tenant">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-users"></i>
            </div>
            <span class="nav-link-text ms-1">Tenants</span>
          </a>
        </li>
        
        <li class="nav-item mb-5">
          <a class="nav-link text-white " href="notification-list">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-bell"></i>
            </div>
           Notifications
            <span class="badge badge-pill badge-danger">{{  \Auth::guard('landlord')->user()->unreadNotifications->count() }}</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <a class="nav-link text-white " href="{{ route('landlord.logout') }}" onclick="event.preventDefault(); if(confirm('Are you sure you want to log out?'))
              document.getElementById('logout-form').submit();">
                  <form id="logout-form" action="{{ route('landlord.logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
          </a>
        </li>
       
      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 mb-1 shadow-none border-radius-xl bg-gradient-success" id="navbarBlur" data-scroll="true" >
      <div class="container-fluid py-1 px-3">
        @yield('nav')
        
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

        <ul class="navbar-nav mx-auto text-white font-weight-bold">
            <li class="nav-item">Landlord Portal</li>
          </ul>
          
          <ul class="navbar-nav  ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('images/undraw_profile.svg') }}" alt="" class="rounded text-capitalise" width="30px" height="30px">                               
                {{ Auth::guard('landlord')->user()->name.' '.Auth::guard('landlord')->user()->last_name}}


                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="profile">Profile</a>

                  <a class="dropdown-item" href="{{ route('landlord.logout') }}"
                      onclick="event.preventDefault(); if(confirm('Are you sure you want to log out?'))
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('landlord.logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
                
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    @yield('content')
    
  <!--   Core JS Files   -->
  @yield('footer')
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
  @yield('scripts')
  <script src= "{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.1.0')}}"></script>

</body>

</html>