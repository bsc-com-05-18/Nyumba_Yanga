@extends('layouts.app')

@section('content')
<div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
            <div>
                <h6 class="text-uppercase mx-5" style="font-size:24px; font-weight: bold;">for rent</h6>
            </div>
        </div>

        <div class="col-md-6">
          <div class="dropdown float-lg-end pe-4">
              <form action="" method="POST">
                <div class="input-group input-group-outline mb-3">
                  <input type="text" name="query" placeholder="Search by location..." class="form-control">
                       
                </div>
              </form>
          </div>
        </div>
    <div class="row">
        @foreach ($houses as $house)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset($house->image) }}" class="card-img-top" alt="House Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $house->title }}</h5>
                        <!-- Display other house details (e.g., price, description, etc.) -->
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
