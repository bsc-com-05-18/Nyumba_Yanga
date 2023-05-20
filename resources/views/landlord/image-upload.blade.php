@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-6">
            <li class="breadcrumb-item text-sm"><a class="opacity-6 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Add Property</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Add Property</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mx-auto text-dark">
        <div class="col-md-6">
            <div>
                <h6 class="text-uppercase">add property</h6>
            </div>
        </div>

        <div class="col-md-6">
            <div class="dropdown float-lg-end pe-4">
                <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-ellipsis-v text-secondary"></i>
                </a>
                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n6" aria-labelledby="dropdownTable">
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="card-body mx-auto justify-content-center">
        <form method="POST" action="image-upload" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" name="title" id="title" placeholder="Property Name" class="form-control{{  $errors->has('title') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                        <div class="invalid-feedback">{{  $errors->first('title') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" name="location" id="location" placeholder="Location" class="form-control{{  $errors->has('location') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('location'))
                        <div class="invalid-feedback">{{  $errors->first('location') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" name="description" id="description" placeholder="Decription" class="form-control{{  $errors->has('description') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('description'))
                        <div class="invalid-feedback">{{  $errors->first('description') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <div class="input-group input-group-outline mb-3">
                        <input type="number" name="price" id="price" placeholder="Price" class="form-control{{  $errors->has('price') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('price'))
                        <div class="invalid-feedback">{{  $errors->first('price') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <input required type="file" name="image" id="image" class="form-control{{  $errors->has('image') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('image'))
                        <div class="invalid-feedback">{{  $errors->first('image') }}</div>
                        @endif
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <select class="form-select text-muted px-3" id="options" name="options" aria-label="Default select example" required>
                            <option value="" selected>Choose an action</option>
                            <option value="sell">For Sale</option>
                            <option value="rent">For Rent</option>
                            @if ($errors->has('options'))
                            <div class="invalid-feedback">{{  $errors->first('options') }}</div>
                            @endif
                        </select>
                    </div>
                </div> -->
            </div>
                <div class="row mx-auto justify-content-center">
                    <div class="col-md-6">
                        <div>
                            <button type="" class="btn bg-gradient-primary w-120 my-4 mb-2">Reset</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button type="submit" class="btn bg-gradient-success w-120 my-4 mb-2">Add</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection

@section('footer')
               
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection



