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
  <form method="POST" action="assign-tenant">
    @csrf
    <label for="property">Select Property:</label>
    <select name="property_id" id="property">
      @foreach($properties as $property)
      <option value="{{ $property->id }}">{{ $property->title }}</option>
      @endforeach
    </select>
    <label for="tenant">Select Tenant:</label>
    <select name="user_id" id="tenant">
      @foreach($tenants as $tenant)
      <option value="{{ $tenant->id }}">{{ $tenant->name }}  {{ $tenant->last_name }}</option>
      @endforeach
    </select>
    <button type="submit">Assign tenant</button>
  </form>
  @endsection

@section('footer')
               
@endsection

@section('scripts')
               
@endsection