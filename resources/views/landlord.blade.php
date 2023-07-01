@extends('layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">My Landlord</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">My Landlord</h6>
        </nav>
@endsection

@section('content')

<div class="container text-muted">
    <div class="content-wrapper">
        
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-center text-uppercase">my landlord</h5>     
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <!-- Content Row -->
                        <div class="card-body">
                        @foreach ($houses as $house)
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0">Landlord Name</h6>
                                </div>
                                <div class="col">
                                {{ $house->property->landlord->name }} {{ $house->property->landlord->last_name }}
                                </div>
                            
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0">Property Name</h6>
                                </div>
                                <div class="col">
                                {{ $house->property->title }}
                                </div>
                                
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0">Landlord Email</h6>
                                </div>
                                <div class="col">
                                {{ $house->property->landlord->email }}
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0">Landlord Phone Number</h6>
                                </div>
                                <div class="col">
                                {{ $house->property->landlord->phone }}
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    
                                </div>
                            </div>
                            <hr>
                            
                            </div>
                            <!-- Rating and commenting -->
                            <h5>RATE THIS PROPERTY</h5>
                            <form action="{{ url('rate/'.$house->property->id.'/'.$tenant->id) }}" method="POST">
                              @csrf
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                  <label for="rating">RATING:</label>
                                  <div id="rating"></div>
                                  <input type="hidden" name="rating">
                                </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                  <label for="comment">COMMENT:</label>
                                  <textarea name="comment" id="comment" rows="5"></textarea>
                                  </div>
                                </div>
                              </div>
                              
                              <button type="submit" class="btn btn-warning">Submit</button>
                            </form>
                            <script>
                              $(function() {
                                $("#rating").rateYo({
                                  rating: 0,
                                  halfStar: true,
                                  starWidth: "30px",
                                  onChange: function(rating, rateYoInstance) {
                                    $("input[name='rating']").val(rating);
                                  }
                                });
                              });
                            </script>
                        </div>
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



