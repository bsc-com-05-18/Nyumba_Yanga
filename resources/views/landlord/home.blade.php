@extends('landlord.layouts.master')

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
                <!-- <h2 class="ms-auto">5</h2> -->
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
                <!-- <h2 class="ms-auto">5</h2> -->
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



