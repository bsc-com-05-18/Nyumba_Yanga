@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-6">
            <li class="breadcrumb-item text-sm"><a class="opacity-6 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Maintenance Report</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Maintenance Report</h6>
        </nav>
@endsection

@section('content')
<h5>Notification Details</h5>
<p>From: {{ $maintenanceReport->user->name }} {{ $maintenanceReport->user->last_name }}</p>
<p>For the property: {{ $maintenanceReport->property->title }}</p>
<p>Problem description: {{ $maintenanceReport->description }}</p>
@if ($maintenanceReport->image)
    <img src="{{ asset('maintenance_reports/'. $maintenanceReport->image) }}" alt="attachment">
@endif
@endsection

@section('footer')
               
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection