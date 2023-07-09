@extends('landlord.layouts.master')

@section('styles')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">My Properties/ {{ $property->title }}</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">My Properties/ {{ $property->title }}</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <!--  -->
            <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for ($i = 1; $i <= 5; $i++)
                    <li data-target="#imageCarousel" data-slide-to="{{ $i-1 }}" class="{{ $i === 1 ? 'active' : '' }}"></li>
                    @endfor
                </ol>
                <div class="carousel-inner">
                    @for ($i = 1; $i <= 5; $i++)
                    <div class="carousel-item {{ $i === 1 ? 'active' : '' }}">
                        <img src="{{ asset('/images/'.$property->{'image'.$i}) }}" class="d-block w-100">
                    </div>
                    @endfor
                </div>
                <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!--  -->
        </div>
        <div class="col-md-6">
            <h4 class="">Property Details</h4>
            <!-- <div class="row">
                <div class="col-md-6"> -->
                <p>Title: {{ $property->title }}</p>
                <p>Location: {{ $property->location }}</p>
                <p>Address: {{ $property->address }}</p>
                <p>Size: {{ $property->size }}</p>
                <p>Description: {{ $property->description }}</p>
                <!-- </div>
                <div class="col-md-6"> -->
                <p>Quantity: {{ $property->quantity }}</p>
                <p>Status: {{ $property->status }}</p>
                <p>Type: {{ $property->type }}</p>
                <p>Price: MWK{{ $property->price }}</p>
                <!-- </div>
            </div> -->
            
        </div>
    </div>    
</div>
@endsection

@section('footer')

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('#imageCarousel').carousel();
    })
</script>

@endsection



