@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">My Properties/Images</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">My Properties/Images</h6>
        </nav>
@endsection

@section('content')
<img src="{{ asset('/images/'.$properties->image1) }}" alt="logo">

@endsection

@section('footer')

@endsection

@section('scripts')

@endsection
