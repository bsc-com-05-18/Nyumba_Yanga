@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-8" >
        <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gray-400 shadow-primary border-radius-lg py-2 px-2 pe-1 text-center">
                    <img src="{{ asset('/images/'.$data->image) }}" alt="logo"class="img-fluid">
                </div>
            </div>
        <div class="card-body">
            <div class="row"  style="margin-left: 2px;">
                <div class="col-md-3">
                    <img src="{{ asset('images/bed.jpg')}}" alt="logo" height="200" width="200" class="mr-3">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/living.jpg')}}" alt="logo" height="200" width="200" class="mr-3">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/kit.jpg')}}" alt="logo" height="200" width="200" class="mr-3">                
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/home.jpg')}}" alt="logo" height="200" width="200" class="">                
                </div>
            </div>
            
        </div>
    </div>
        <!--  -->

    </div>
    <div class="col-lg-4">
    <h4 class="py-3" style="font-weight: bold;">PROPERTY DETAILS</h4>
        <div class="text-uppercase mb-3" style="font-weight: bold;">
             Name: {{ ($data->title) }}
        </div>
        <div class="text-uppercase mb-3" style="font-weight: bold;">
             Price: MWK{{ ($data->price) }}
        </div>
        <div class="text-uppercase mb-3" style="font-weight: bold;">
             Location: {{ ($data->location) }}
        </div>
        <div class="text-uppercase mb-3" style="font-weight: bold;">
            Description: {{ ($data->description) }}
        </div>
       <hr>
       <h4 class="py-3" style="font-weight: bold;">TENANCY REQUEST FORM</h4>
        <form action="{{ url('viewproperty/'.$data->id.'/book') }}" method="POST">
        @csrf
            <div class="form-row mb-4">
                <div class="col-lg-10">
                    <label for="full_name" class="mb-2">Full Name</label>
                    <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>

                    @error('full_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="col-lg-10">
                <label for="email" class="mb-2">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="col-lg-10">
                <label for="phone" class="mb-2">Phone Number</label>
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="col-lg-10">
                <label for="occupation" class="mb-2">Occupation</label>
                    <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation" autofocus>

                    @error('occupation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row mb-2 d-flex justify-content-end">
                <div class="col-lg-7">
                <button type="submit" class="btn btn-success">SEND REQUEST</button>

                </div>
            </div>
        </form>
        
    </div>
</div>
@endsection





