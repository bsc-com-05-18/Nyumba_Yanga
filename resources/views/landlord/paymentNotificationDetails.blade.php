@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-6">
            <li class="breadcrumb-item text-sm"><a class="opacity-6 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Payment Report</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Payment Report</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid" style="min-height: 75vh; margin: 0; padding: 0;">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-center text-uppercase">payment notification details</h5>   
                </div>
                    <p>From: {{ $paymentReport->user->name }} {{ $paymentReport->user->last_name }}</p>
                    <p>For the property: {{ $paymentReport->property->title }}</p>
                    <p>Payment Amount: {{ $paymentReport->payment_amount }}</p>
                  
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