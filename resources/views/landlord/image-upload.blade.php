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
@if(session('success'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">Success!</h4>
            <p class="mb-0">New property was added successfully!</p>
        </div>
        @endif
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
                        <input type="text" name="description" id="description" placeholder="Description" class="form-control{{  $errors->has('description') ? ' is-invalid' : '' }}" required>
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
                        <input type="text" name="size" id="size" placeholder="Size" class="form-control{{  $errors->has('size') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('size'))
                        <div class="invalid-feedback">{{  $errors->first('size') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" name="address" id="address" placeholder="Address" class="form-control{{  $errors->has('address') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('address'))
                        <div class="invalid-feedback">{{  $errors->first('address') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <select class="form-select px-3 text-muted" id="type" name="type" aria-label="Default select example" required>
                            <option value="" selected>Choose property type</option>
                            <option value="girls">Girls' Hostel</option>
                            <option value="boys">Boys' Hostel</option>
                            <option value="bedsitter">Bed-Sitter</option>
                            <option value="house">House</option>
                            @if ($errors->has('type'))
                            <div class="invalid-feedback">{{  $errors->first('type') }}</div>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <select class="form-select px-3 text-muted" id="status" name="status" aria-label="Default select example" required>
                            <option value="" selected>Choose property status</option>
                            <option value="sale">For Sale</option>
                            <option value="rent">For Rent</option>
                            @if ($errors->has('status'))
                            <div class="invalid-feedback">{{  $errors->first('status') }}</div>
                            @endif
                        </select>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <input required type="file" name="images[]" id="images" class="form-control{{  $errors->has('images') ? ' is-invalid' : '' }}" multiple required>
                        @if ($errors->has('images'))
                        <div class="invalid-feedback">{{  $errors->first('images') }}</div>
                        @endif
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <input type="file" name="image2" id="image2" class="form-control{{  $errors->has('image2') ? ' is-invalid' : '' }}">
                        @if ($errors->has('image2'))
                        <div class="invalid-feedback">{{  $errors->first('image2') }}</div>
                        @endif
                    </div>
                </div> -->
            </div>
            <!-- <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <input type="file" name="image3" id="image3" class="form-control{{  $errors->has('image3') ? ' is-invalid' : '' }}">
                        @if ($errors->has('image3'))
                        <div class="invalid-feedback">{{  $errors->first('image3') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <input type="file" name="image4" id="image4" class="form-control{{  $errors->has('image4') ? ' is-invalid' : '' }}">
                        @if ($errors->has('image4'))
                        <div class="invalid-feedback">{{  $errors->first('image4') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <input type="file" name="image5" id="image5" class="form-control{{  $errors->has('image5') ? ' is-invalid' : '' }}">
                        @if ($errors->has('image5'))
                        <div class="invalid-feedback">{{  $errors->first('image5') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <input type="file" name="image6" id="image6" class="form-control{{  $errors->has('image6') ? ' is-invalid' : '' }}">
                        @if ($errors->has('image6'))
                        <div class="invalid-feedback">{{  $errors->first('image6') }}</div>
                        @endif
                    </div>
                </div>
            </div> -->
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



