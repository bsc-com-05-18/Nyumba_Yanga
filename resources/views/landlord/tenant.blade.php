@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">My Tenants</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">My Tenants</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-1">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6 class="text-uppercase">my tenants</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
             
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-uppercase opacity-7">Tenant</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-uppercase opacity-7 ps-2">property</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email address</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone number</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($houses as $house)
                  @foreach ($house->assignments as $assignment)
                    <tr>
                      <td>{{ $assignment->user->name }} {{ $assignment->user->last_name }}</td>
                      <td>{{ $house->title }}</td>
                      <td>{{ $assignment->user->email }}</td>
                      <td>{{ $assignment->user->phone }}</td>

                     
                    </tr>
                    
                    @endforeach
                    @endforeach
                  </tbody>
                </table>
              </div>
              
            </div>        
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



