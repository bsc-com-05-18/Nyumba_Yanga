
@extends('landlord.layouts.master')


@section('content')    
<div class="row">
        <div class="col-md-12">
           <div class="card">

             <div class="card-header text-light">
                <h4>Edit Property</h4>
             </div>

             <div class="card-body">
                
             <form method="POST" action="{{url('update/'.$property->id)}}" enctype= "multipart/form-data">
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label  class="form-label">Title</label>
    <input type="text" value="{{$property->title}}"name="title" class="form-control">
  </div>

  <div class="mb-3">
    <label  class="form-label">location</label>
    <input type="text" value="{{$property->location}}"name="location" class="form-control">
  </div>

  <div class="mb-3">
    <label  class="form-label">price</label>
    <input type="text" value="{{$property->price}}"name="price" class="form-control">
  </div>

  <div class="mb-3">
    <label  class="form-label">description</label>
    <input type="text" value="{{$property->description}}" name="description"class="form-control">
  </div>
 
 

  <button type="submit" class="btn btn-success">Update</button>
</form>
             </div>
           </div>

        </div>
    </div>
@endsection

