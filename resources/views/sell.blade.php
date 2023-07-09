@extends('layouts.app')

@section('content')
<div class="container-fluid">
      <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div>
                <h6 class="text-uppercase" style="font-size:24px; font-weight: bold;">for sale</h6>
            </div>
        </div>

        <div class="col-md-6">
          <div class="dropdown float-lg-end ">
              <form action="sale-search" method="get">
                <div class="input-group input-group-outline mb-3">
                  <input type="text" name="location" placeholder="Search by location..." class="form-control">   
                  <button type="submit" class="input-group-outline"><i class="fa-solid fa-search"></i></button>    
                </div>
              </form>
          </div>
        </div>
        <!--  -->
       
      </div>
      <div class="row mt-1 justify-content-center">
        @foreach($data as $try)
        <div class="col-lg-3 col-md-12 mb-1">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gray-400 shadow-primary border-radius-lg py-2 px-2 pe-1 text-center">
              <img src="{{ asset('/images/'.$try->image1) }}" alt="" class="img-fluid" style="filter: {{ $try->quantity == 0 ? 'grayscale(100%)' : 'none' }}; opacity: {{ $try->quantity == 0 ? '0.5' : '1' }};">             
              </div>
            </div>
            <div class="card-body">
              <div class="status">
                @if ($try->quantity === 0)
                  <h4 style="color: red; font-weight: bold;">UNAVAILABLE</h4>
                @endif
              </div>
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
                            
              <a href="{{ url('viewbuyproperty/'.$try->id) }}" class="btn btn-success">View More Details</a>
              
            </div>
          </div>
        </div>
        @endforeach
       
      </div>
</div>
@endsection






