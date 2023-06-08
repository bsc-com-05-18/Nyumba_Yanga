
@extends('landlord.layouts.master')

@section('nav')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit Property</li>
  </ol>
  <h6 class="font-weight-bolder text-white mb-0">Edit Property</h6>
</nav>
@endsection


@section('content')    
<div class="row d-flex justify-content-center">
        <div class="col-md-8">
           <div class="card">

             <div class="card-header text-light d-flex justify-content-center">
                <h4>Edit Property</h4>
             </div>

             <div class="card-body">
                
             <form method="POST" action="{{url('update/'.$property->id)}}" enctype= "multipart/form-data">
   @csrf
   @method('PUT')
   <label  class="form-label">Title</label>
  <div class="input-group input-group-outline mb-3">
    <input type="text" value="{{$property->title}}"name="title" class="form-control">
  </div>

  <label  class="form-label">Location</label>
  <div class="input-group input-group-outline mb-3">
    <input type="text" value="{{$property->location}}"name="location" class="form-control">
  </div>

  <label  class="form-label">Price</label>
  <div class="input-group input-group-outline mb-3">
    <input type="text" value="{{$property->price}}"name="price" class="form-control">
  </div>

  <label  class="form-label">Description</label>
  <div class="input-group input-group-outline mb-3">
    <input type="text" value="{{$property->description}}" name="description"class="form-control" >
  </div>

  <label  class="form-label">Size</label>
  <div class="input-group input-group-outline mb-3">
    <input type="text" value="{{$property->size}}" name="size"class="form-control">
  </div>

  <label  class="form-label">Address</label>
  <div class="input-group input-group-outline mb-3">
    <input type="text" value="{{$property->address}}" name="address"class="form-control">
  </div>

  <label  class="form-label">Image</label>
  <div class="input-group input-group-outline mb-3">
    <input type="text" value="{{$property->image}}" name="image"class="form-control">
  </div>
 
 

  <button type="submit" class="btn btn-success">Update</button>
</form>
             </div>
           </div>

        </div>
    </div>
@endsection

