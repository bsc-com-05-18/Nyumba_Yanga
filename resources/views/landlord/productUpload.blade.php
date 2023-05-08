@extends('landlord.layouts.master')


@section('content')
<form method="POST" action="/upload" enctype= "multipart/form-data">
@csrf
  <div class="mb-3">
    <label  class="form-label">name</label>
    <input type="text"  name="name" class="form-control">
  </div>

  <div class="mb-3">
    <label  class="form-label">price</label>
    <input type="text" name="price" class="form-control">
  </div>

  <div class="mb-3">
    <label  class="form-label">location</label>
    <input type="text" name="location" class="form-control">
  </div>

  <div class="mb-3">
    <label  class="form-label">description</label>
    <input type="text"  name="description"class="form-control">
  </div>
  <div class="mb-3">
    <label  class="form-label">image</label>
    <input type="file"  name="image"class="form-control">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

@section('footer')
@endsection