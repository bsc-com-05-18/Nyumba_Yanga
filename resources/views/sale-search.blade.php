@extends('layouts.app')

@section('content')

<!--  -->
<div class="row mt-1 justify-content-center">
@if ($properties->isEmpty())
<p>No properties found</p>
@else
        @foreach($properties as $property)
        <div class="col-lg-3 col-md-12 mt-4 mb-1">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gray-400 shadow-primary border-radius-lg py-2 px-2 pe-1 text-center">
              <img src="{{ asset('/images/'.$property->image1) }}" alt="" class="img-fluid" style="filter: {{ $property->quantity == 0 ? 'grayscale(100%)' : 'none' }}; opacity: {{ $property->quantity == 0 ? '0.5' : '1' }};">             
              </div>
            </div>
            <div class="card-body">
              <div class="status">
                @if ($property->quantity === 0)
                  <h4 style="color: red; font-weight: bold;">UNAVAILABLE</h4>
                @endif
              </div>
              <div class="row">
                <div class="col-lg-7">
                  <h5 class="card-title text-uppercase">{{ ($property->title) }}</h5>
                </div>
                <div class="col-lg-5">
                  <h5 class="card-title text-end text-info">MWK{{ ($property->price) }}</h5>
                </div>
              </div>
              <h5 class="card-text"><i class="fa-sharp fa-solid fa-location-dot"></i> {{ ($property->location) }}</h5>
              <h5 class="card-text">{{ ($property->description) }}</h5>
              
              <a href="{{ url('viewbuyproperty/'.$property->id) }}" class="btn btn-success">View More Details</a>              
            </div>
          </div>
        </div>
        @endforeach
        @endif

      </div>
@endsection
