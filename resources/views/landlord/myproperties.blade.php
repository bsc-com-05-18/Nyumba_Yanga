@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">My Properties</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">My Properties</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid">
      <div class="row mt-1 justify-content-center">
        <div class="col-lg-5 col-md-6 mt-4 mb-1">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gray-400 shadow-primary border-radius-lg py-2 px-2 pe-1 text-center">
              <img src="{{ asset('images/house2.jpg') }}" alt="" class="img-fluid">             
              </div>
            </div>
            <div class="card-body">
            <div class="d-flex align-items-center justify-content-center">
                <h6 class="mb-0 text-uppercase">property 1</h6>
                <h6 class="ms-auto"><i class="fa fa-ellipsis-v text-secondary"></i></h6>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 mt-4 mb-1">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gray-400 shadow-success border-radius-lg py-2 px-2 pe-1 text-center">
              <img src="{{ asset('images/house1.jpg') }}" alt="" class="img-fluid">             
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-center">
                <h6 class="mb-0 text-uppercase">property 2</h6>
                  <h6 class="ms-auto"><i class="fa fa-ellipsis-v text-secondary"></i></h6>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4 justify-content-center">
        <div class="col-lg-5 col-md-6 mt-1 mb-0">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gray-400 shadow-primary border-radius-lg py-2 px-2 pe-1 text-center">
                <a href="property">
                <img src="{{ asset('images/house2.jpg') }}" alt="" class="img-fluid">             
                </a>
              </div>
            </div>
            <div class="card-body">
            <div class="d-flex align-items-center justify-content-center">
                <h6 class="mb-0 text-uppercase">property 3</h6>
<h6 class="ms-auto">                      <i class="fa fa-ellipsis-v text-secondary"></i>
</h6>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 mt-1 mb-0">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gray-400 shadow-dark border-radius-lg py-2 px-2 pe-1 text-center">
                <img src="{{ asset('images/house3.jpg') }}" alt="" class="img-fluid">             
            </div>
            </div>
            <div class="card-body">
            <div class="d-flex align-items-center justify-content-center">
                <h6 class="mb-0 text-uppercase">property 4</h6>
<h6 class="ms-auto">                      <i class="fa fa-ellipsis-v text-secondary"></i>
</h6>
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



