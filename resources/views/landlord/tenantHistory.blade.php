@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">My Tenant History</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">My Tenant History</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid">
  <!--  -->
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-1">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6 class="text-uppercase">my tenant history</h6>
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">start date</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">end date</th>

                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($assignmentHistory as $assignment)
                    <tr>
                      <td>{{ $assignment->user->name }} {{ $assignment->user->last_name }}</td>
                      <td>{{ $assignment->property->title }}</td>
                      <td>{{ $assignment->start_date }}</td>
                      <td>{{ $assignment->end_date ?? 'N/A' }}</td>
                    </tr>
                    
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



