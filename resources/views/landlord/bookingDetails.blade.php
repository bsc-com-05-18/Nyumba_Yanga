@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-6">
            <li class="breadcrumb-item text-sm"><a class="opacity-6 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Booking Details</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Booking Details</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid" style="min-height: 75vh; margin: 0; padding: 0;">

    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-center text-uppercase">booking details</h5>   
                </div>
                    <p>You have a property booking from: {{ $notification->booking->full_name }}</p>
                    <p>For property: {{ $notification->property->title }}.</p>
                    <p>They can be contacted through the following contacts: 
                        {{ $notification->booking->email }} and  {{ $notification->booking->phone }}
                    </p>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('footer')
               
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection