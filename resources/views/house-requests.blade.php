@extends('layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">House Requests</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">House Requests</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid mt-5" style="min-height: 70vh; margin: 0; padding: 0;">
    <div class="content-wrapper">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-center text-uppercase">House Requests</h5>   
                    </div>
                    @php 
                    $i=1;
                    @endphp
                    @foreach($bookings as $booking)
                    <table class="table table-striped py-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>PROPERTY</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$i++;}}</td>
                                <td>{{ $booking->property->title }}</td>
                                @if($booking->property->user)
                                <td>Already assigned!</td>
                                @else
                                <td>Pending...</td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                   
                </div>
               
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
               
@endsection

@section('scripts')
               
@endsection
