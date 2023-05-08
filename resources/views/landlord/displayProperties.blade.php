<link href="{{asset('custom/css/bootstrap.min.css')}}" rel="stylesheet" >

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First</th>
      <th scope="col">last</th>
      <th scope="col">Last</th>
      <th scope="col">Last</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pro as $product)
    <tr>
      
      <td>{{$product->product_id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->location}}</td>
      <td>
        <a href="{{url('editproduct/'.$product->product_id)}}" class="btn btn-success">Edit</a>
        <a href="{{url('deleteproduct/'.$product->product_id)}}" class="btn btn-danger">Delete</a>
      </td>
       
    </tr>
    @endforeach
  </tbody>
</table>
</form>