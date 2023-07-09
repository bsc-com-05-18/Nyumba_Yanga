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
<div class="container-fluid" style="min-height: 75vh; margin: 0; padding: 0;">
  <div class="row">
  <div class="container-fluid">
  @if (session('success'))
  <div class="alert alert-success" role="alert">
      {{ session('success') }}
  </div>
  @elseif (session('error'))
  <div class="alert alert-danger" role="alert">
      {{ session('error') }}
  </div>
  @endif
  @if ($hasAvailableProperties)
  <form method="POST" action="assign-tenant">
    @csrf

    <label for="property">Select Property:</label>
    <select name="property_id" id="property">
      @foreach($properties as $property)
      <option value="{{ $property->id }}">{{ $property->title }}</option>
      @endforeach
    </select>

    <label for="tenant">Select Tenant:</label>
    <select name="user_id" id="user_id">
      @foreach($tenants as $tenantId => $tenantEmail)
      <option value="{{ $tenantId }}">{{ $tenantEmail }}</option>
      @endforeach
    </select>
    <button type="submit" class="btn bg-gradient-success w-120 my-4 mb-2">Assign</button>
  </form>
  @endif
  </div>
  <!--  -->
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-1">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6 class="text-uppercase">my tenants</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                <a href="tenant-history" class="btn btn-warning float-end mr-5">Tenant History</a>

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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($houses as $house)
                    <tr>
                      @if($house->user)
                      <td>{{ $house->user->user->name }} {{ $house->user->user->last_name }}</td>
                      <td>{{ $house->title }}</td>
                      <td>{{ $house->user->user->email }}</td>
                      <td>{{ $house->user->user->phone }}</td>
                      <td>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#unassignModal{{$house->user->user->id}}">Unassign Tenant</button>
                      </td>
                     
                    </tr>
                     <!-- UNASSIGN MODAL ---->
                     <div class="modal fade" id="unassignModal{{$house->user->user->id}}" tabindex="-1" role="dialog" aria-labelledby="unassignModalLabel{{$house->user->user->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="unassignModalLabel{{$house->user->user->id}}">Unassign Tenant</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to unassign this tenant from this property?</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <a href="{{ route('unassign.tenant', ['tenantId' => $house->user->user->id]) }}" class="btn btn-danger">Unassign Tenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
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



