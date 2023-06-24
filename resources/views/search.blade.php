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
              <img src="{{ asset('/images/'.$property->image) }}" alt="" class="img-fluid">             
              </div>
            </div>
            <div class="card-body">
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
                            <div class="row">
                <div class="col-lg-7">
                <div class="text-uppercase mb-3" style="font-weight: bold;">
                    Average Rating: {{ $property->averageRating }}
                    <div class="star-rating" style="color: #F39C12;">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $property->averageRating)
                                <i class="fas fa-star"></i>
                            @else
                                <i class="far fa-star"></i>
                            @endif
                        @endfor
                    </div>
                </div>               
              </div>
                <div class="col-lg-5">
                <p>Reviews ({{ $property->numComments }})</p>
                </div>
              </div>
              @if ($property->status == 'rent')
              <a href="{{ url('viewproperty/'.$property->id) }}" class="btn btn-success">View More Details</a>
              @else
              <a href="{{ url('viewbuyproperty/'.$property->id) }}" class="btn btn-success">View More Details</a>

              @endif
              
            </div>
          </div>
        </div>
        @endforeach
        @endif

      </div>
@endsection
