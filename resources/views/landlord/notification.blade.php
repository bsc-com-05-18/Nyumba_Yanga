@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-6">
            <li class="breadcrumb-item text-sm"><a class="opacity-6 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Booking History</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Booking History</h6>
        </nav>
@endsection

@section('content')
@foreach ($bookings as $booking)

<p>Booking ID:  {{ $booking->id }}</p>
<p>Tenant Name:  {{ $booking->full_name }}</p>
<p>Tenant Number:  {{ $booking->phone }}</p>
<p>House Details</p>
<p>House Name:  {{ $booking->property->title }}</p>
<p>House Address:  {{ $booking->property->address }}</p>
@endforeach
@endsection

@section('footer')
               
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection