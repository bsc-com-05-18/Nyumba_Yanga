@extends('layouts.app')

@section('content')
<div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
            <div>
                <h6 class="text-uppercase mx-5" style="font-size:24px; font-weight: bold;">for sale</h6>
            </div>
        </div>

        <div class="col-md-6">
          <div class="dropdown float-lg-end pe-4">
              <form action="" method="POST">
                <div class="input-group input-group-outline mb-3">
                  <input type="text" name="query" placeholder="Search by location..." class="form-control">
                       
                </div>
              </form>
          </div>
        </div>
        <!--  -->
       
      </div>
      <div class="row mt-1 justify-content-center">
        @foreach($data as $try)
        <div class="col-lg-3 col-md-12 mt-4 mb-1">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gray-400 shadow-primary border-radius-lg py-2 px-2 pe-1 text-center">
              <img src="{{ asset('/images/'.$try->image) }}" alt="" class="img-fluid">             
              </div>
            </div>
            <div class="card-body">
            <div class="d-flex align-items-center justify-content-center">
                <h5 class="mb-0 text-uppercase">{{ ($try->title) }}</h5>
                <h6 class="mb-0 text-uppercase">{{ ($try->title) }}</h6>
                <h6 class="ms-auto"><i class="fa fa-ellipsis-v text-secondary"></i></h6>
              </div>
              
            </div>
          </div>
        </div>
        @endforeach
        <!-- <div class="col-lg-3 col-md-12 mt-4 mb-1">
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
        <div class="col-lg-3 col-md-12 mt-4 mb-1">
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
        <div class="col-lg-3 col-md-12 mt-4 mb-1">
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
        <div class="col-lg-3 col-md-12 mt-4 mb-1">
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
                <h6 class="ms-auto"><i class="fa fa-ellipsis-v text-secondary"></i></h6>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 mt-4 mb-1">
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
        <div class="col-lg-3 col-md-12 mt-4 mb-1">
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
        <div class="col-lg-3 col-md-12 mt-4 mb-1">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gray-400 shadow-dark border-radius-lg py-2 px-2 pe-1 text-center">
                <img src="{{ asset('images/house3.jpg') }}" alt="" class="img-fluid">             
            </div>
            </div>
            <div class="card-body">
            <div class="d-flex align-items-center justify-content-center">
                <h6 class="mb-0 text-uppercase">property 4</h6>
                <h6 class="ms-auto"><i class="fa fa-ellipsis-v text-secondary"></i></h6>
              </div>
              
            </div>
          </div>
        </div> -->
      </div>
</div>
@endsection





