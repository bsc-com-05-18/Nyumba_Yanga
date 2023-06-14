@extends('landlord.layouts.master')


@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Property Name</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Property Name</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-1">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6 class="text-uppercase">property name</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-0" >
         <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/kit.jpg') }}" class="d-block mx-auto" style="height:400px; width: 90%;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p class="text-dark">Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/living.jpg') }}" class="d-block mx-auto" style="height:400px; width: 90%;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p class="text-dark">Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/house2.jpg') }}" class="d-block mx-auto" style="height:400px; width: 90%;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p class="text-dark">Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </div>        
          </div>
        </div>
        
        </div>
        
    </div>
    <div class="row mt-2">
        <div class="col-lg-6 col-md-6 mt-2 mb-2">
          <div class="card z-index-2 ">
            <div class="card-header p-0 mt-n4 mx-3 z-index-2 bg-transparent">
            <h6 class="mb-0 text-center text-uppercase">property documents</h6>
            </div>
            <div class="card-body">
              <div class="bg-gray-400 shadow-primary border-radius-lg py-3 pe-1">
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 mt-2 mb-2">
          <div class="card z-index-2 ">
            <div class="card-header p-0 mt-n4 mx-3 z-index-2 bg-transparent">
            <h6 class="mb-0 text-center text-uppercase">property details</h6>
            </div>
            <div class="card-body">
              <div class="bg-gray-400 shadow-primary border-radius-lg py-3 pe-1">
               
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



