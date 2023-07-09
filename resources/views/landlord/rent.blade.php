@extends('landlord.layouts.master')


@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Rent Analysis</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Rent Analysis</h6>
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
                  <h6 class="text-uppercase">payment history</h6>
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
              <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tenant Name</th>
                        <th>Property</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                    $i=1;
                    @endphp
                    @foreach ($payments as $payment )

                        <tr>
                            <td>{{$i++;}}</td>
                            <td>{{$payment->user->name}} {{$payment->user->last_name}}</td>
                            <td>{{$payment->property->title}}</td>
                            <td>{{$payment->payment_amount}}</td>
                            <td>{{$payment->created_at->diffForHumans() }}</td>
                        </tr>

                    @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-center">
                {!! $payments->links() !!}
            </div>
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
<script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>        
@endsection



