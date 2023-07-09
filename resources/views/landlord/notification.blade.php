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
<div class="container-fluid" style="min-height: 75vh; margin: 0; padding: 0;">
<h5>Notifications</h5>
<ul class="list-unstyled">
    @forelse ($notifications as $notification)
        <li class="py-2 px-2" style="background-color: #EFEDED">
           <a href="{{ url('notification/'.$notification->id) }}" style="color: {{ $notification->read ? 'gray' : '#0caf12' }}">
            <div class="row">
                <div class="col-md-9">
                    {{ $notification->message }} {{ $notification->user->name }} {{ $notification->user->last_name }} For Property {{ $notification->property->title }}
                </div>
                <div class="col-md-3">
                Received {{ $notification->created_at->diffForHumans() }}
                </div>
            </div>
            </a>
        </li>
        <br>
        @empty
        <p>No notifications yet</p>
    @endforelse
</ul>
    <div class="d-flex justify-content-center">
        {!! $notifications->links() !!}
    </div>
</div>

@endsection

@section('footer')
               
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection