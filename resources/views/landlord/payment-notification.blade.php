@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-6">
            <li class="breadcrumb-item text-sm"><a class="opacity-6 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Payment Notifications</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Payment Notifications</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid" style="min-height: 75vh; margin: 0; padding: 0;">
<!--  -->
<div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-1">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7 mt-2">
                  <h4 class="text-uppercase">Payment Notifications</h4>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                <a href="check-payment" class="btn btn-warning float-end mr-5">Payment History</a>

                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
               <ul class="list-unstyled">
               @forelse ($notifications as $notification)
                    <li class="py-2 px-2" style="background-color: #EFEDED">
                    <a href="{{ url('payment-notification/'.$notification->id) }}" style="color: {{ $notification->read ? 'gray' : '#0caf12' }}">
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
              <!--  -->
            </div>        
          </div>
        </div>
        
        </div>
        
    </div>
<!--  -->
 
</div>

@endsection

@section('footer')
               
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection