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
        <form role="form" class="text-start">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                    <label class="form-label">Property Name</label>
                    <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                <div class="input-group input-group-outline my-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control">
                </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <select class="form-select text-muted px-3" aria-label="Default select example">
                            <option selected>Choose action</option>
                            <option value="1">Buy</option>
                            <option value="2">Sell</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <div class="input-group input-group-outline mb-3">
                    <input type="file" class="form-control">
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                    <input type="file" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <div class="input-group input-group-outline mb-3">
                    <input type="file" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="input-group input-group-outline my-3">
                    <input type="file" class="form-control">

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <div class="input-group input-group-outline mb-3">
                    <input type="file" class="form-control">
                    </div>
                </div>
            </div>
            
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <button type="submit" class="btn bg-gradient-info w-120 my-4 mb-2">Reset</button>
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

@endsection



