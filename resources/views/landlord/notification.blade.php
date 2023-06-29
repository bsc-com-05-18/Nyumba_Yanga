@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-6">
            <li class="breadcrumb-item text-sm"><a class="opacity-6 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Notifications</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Notifications</h6>
        </nav>
@endsection

@section('content')
<h5>Notifications</h5>
<ul class="text-decoration-none">
    @forelse ($notifications as $notification)
        <li>
            @if (!$notification->read)
            <strong>{{ $notification->message }} {{ $notification->user->name }} {{ $notification->user->last_name }} for {{ $notification->property->title }}</strong>
            @else
                {{ $notification->message }}  {{ $notification->user->name }} {{ $notification->user->last_name }} for {{ $notification->property->title }}
            @endif
            <br>
            <a href="{{ url('notification/'.$notification->id) }}" style="color: text-primary; font-weight: bold;">VIEW DETAILS</a>
            <!-- <a class="btn btn-primary" href="" role="button">View Details</a> -->
        </li>
        @empty
        <p>No notifications yet</p>
    @endforelse
</ul>

@endsection

@section('footer')
               
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection