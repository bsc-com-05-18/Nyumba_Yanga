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
              <div class="row">
                <div class="col-lg-7">
                  <h5 class="card-title text-uppercase">{{ ($try->title) }}</h5>
                </div>
                <div class="col-lg-5">
                  <h5 class="card-title text-end text-info">MWK{{ ($try->price) }}</h5>
                </div>
              </div>
              <h5 class="card-text"><i class="fa-sharp fa-solid fa-location-dot"></i> {{ ($try->location) }}</h5>
              <h5 class="card-text">{{ ($try->description) }}</h5>
                            <div class="row">
                <div class="col-lg-7">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                </ul>                
              </div>
                <div class="col-lg-5">
                <p>Reviews (24)</p>
                </div>
              </div>
              <a href="{{ url('viewbuyproperty/'.$try->id) }}" class="btn btn-success">View More Details</a>
              
            </div>
          </div>
        </div>
        @endforeach
       
      </div>
</div>
@endsection






