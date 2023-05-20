@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">My Properties</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">My Properties</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid">
  <!--  -->
  
      <!--  -->
      <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-dark font-weight-bolder text-uppercase opacity-7">Property Name</th>
                      <th class="text-uppercase text-dark font-weight-bolder text-uppercase opacity-7 ps-2">Location</th>
                      <th class="text-center text-uppercase text-dark font-weight-bolder opacity-7">Description</th>
                      <th class="text-uppercase text-dark font-weight-bolder text-uppercase opacity-7 ps-2">Price</th>
                      <th class="text-center text-uppercase text-dark font-weight-bolder opacity-7">Image</th>
                      <th class="text-center text-uppercase text-dark font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
</div>
@endsection

@section('footer')
               
@endsection

@section('scripts')
               
@endsection



