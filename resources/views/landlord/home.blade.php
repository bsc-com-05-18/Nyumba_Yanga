@extends('landlord.layouts.master')
@section('nav')
<nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid">
      <div class="row mt-1 justify-content-center">
        <div class="col-lg-5 col-md-6 mt-4 mb-1">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gray-400 shadow-primary border-radius-lg py-3 pe-1 text-center">
              <i class="fa-solid fa-house-chimney fa-10x" style="color: #43A047;"></i>
              </div>
            </div>
            <div class="card-body">
            <div class="d-flex align-items-center justify-content-center">
                <h6 class="mb-0 text-uppercase">properties</h6>
                <h1 class="ms-auto">{{ $numProperties }}</h1>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 mt-4 mb-1">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gray-400 shadow-success border-radius-lg py-3 pe-1 text-center">
              <i class="fa-solid fa-arrow-trend-up fa-10x" style="color: #43A047;"></i>
             </div>
            </div>
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-center">
                <h6 class="mb-0 text-uppercase">payments</h6>
                <!-- <h2 class="ms-auto">MWK5,000.00</h2> -->
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4 justify-content-center">
        <div class="col-lg-5 col-md-6 mt-1 mb-0">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gray-400 shadow-primary border-radius-lg py-3 pe-1 text-center">
              <i class="fa-sharp fa-solid fa-gears fa-10x" style="color: #43A047;"></i>
             </div>
            </div>
            <div class="card-body">
            <div class="d-flex align-items-center justify-content-center">
                <h6 class="mb-0 text-uppercase">maintenance</h6>
                <!-- <h2 class="ms-auto">5</h2> -->
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 mt-1 mb-0">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gray-400 shadow-dark border-radius-lg py-3 pe-1 text-center">
              <i class="fa-solid fa-users fa-10x" style="color: #43A047;"></i>
               </div>
            </div>
            <div class="card-body">
            <div class="d-flex align-items-center justify-content-center">
                <h6 class="mb-0 text-uppercase">tenants</h6>
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
               
@endsection



