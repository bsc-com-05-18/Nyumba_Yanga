<link href="{{asset('custom/css/bootstrap.min.css')}}" rel="stylesheet" >


<section class="my-5 mx-5">
    <div class="row">
        <div class="col-md-12">
           <div class="card">

             <div class="card-header bg-success text-light">
                <h2 >Edit Property</h2>
             </div>

             <div class="card-body">
                
             <form method="POST" action="{{url('update/'.$pro->product_id)}}" enctype= "multipart/form-data">
@csrf
   @method('PUT')
  <div class="mb-3">
    <label  class="form-label">name</label>
    <input type="text" value="{{$pro->name}}"name="name" class="form-control">
  </div>

  <div class="mb-3">
    <label  class="form-label">location</label>
    <input type="text" value="{{$pro->location}}"name="location" class="form-control">
  </div>

  <div class="mb-3">
    <label  class="form-label">price</label>
    <input type="text" value="{{$pro->price}}"name="price" class="form-control">
  </div>

  <div class="mb-3">
    <label  class="form-label">description</label>
    <input type="text" value="{{$pro->description}}" name="description"class="form-control">
  </div>
 
 

  <button type="submit" class="btn btn-success">Update</button>
</form>
             </div>
           </div>

        </div>
    </div>
</section>


