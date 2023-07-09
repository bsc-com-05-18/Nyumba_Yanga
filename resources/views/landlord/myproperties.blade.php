@extends('landlord.layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">My Properties</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">My Properties</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid" style="min-height: 75vh; margin: 0; padding: 0;">
  <!--  -->

      <!--  -->
      <div class="col-md-12">
      @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
           
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Quantity</th>
                        <!-- <th>Type</th>
                        <th>Status</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                    $i=1;
                    @endphp
                    @foreach ($properties as $property )

                        <tr>
                            <td>{{$i++;}}</td>
                            <td>{{$property->title}}</td>
                            <td>{{$property->location}}</td>
                            <td>{{$property->quantity}}</td>
                            <!-- <td>{{$property->type}}</td>
                            <td>{{$property->status}}</td> -->
                            <td>
                            <a href="{{ url('properties/' .$property->id . '/') }}" class="btn btn-info">View Property Details</a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{$property->id}}">Edit</button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$property->id}}">Delete</button>
                            </td>

                        </tr>

                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$property->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$property->id}}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel{{$property->id}}">Edit Property</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ url('/myproperties/'.$property->id) }}" enctype= "multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label  class="form-label">Title</label>
                                <div class="input-group input-group-outline mb-2">
                                    <input type="text" value="{{$property->title}}"name="title" class="form-control">
                                </div>

                                <label  class="form-label">Location</label>
                                <div class="input-group input-group-outline mb-2">
                                    <input type="text" value="{{$property->location}}"name="location" class="form-control">
                                </div>

                                <label  class="form-label">Price</label>
                                <div class="input-group input-group-outline mb-2">
                                    <input type="number" value="{{$property->price}}"name="price" class="form-control">
                                </div>

                                <label  class="form-label">Description</label>
                                <div class="input-group input-group-outline mb-2">
                                    <input type="text" value="{{$property->description}}" name="description"class="form-control" >
                                </div>

                                <label  class="form-label">Size</label>
                                <div class="input-group input-group-outline mb-2">
                                    <input type="text" value="{{$property->size}}" name="size"class="form-control">
                                </div>

                                <label  class="form-label">Quantity</label>
                                <div class="input-group input-group-outline mb-2">
                                    <input type="number" value="{{$property->quantity}}"name="quantity" class="form-control">
                                </div>

                                <label  class="form-label">Address</label>
                                <div class="input-group input-group-outline mb-2">
                                    <input type="text" value="{{$property->address}}" name="address"class="form-control">
                                </div>

                                <label  class="form-label">Property Type</label>
                                <div class="input-group input-group-outline mb-2">
                                    <select class="form-select px-3 text-muted" id="type" name="type" aria-label="Default select example" required>
                                        <option value="girls" {{ $property->type === 'girls' ? 'selected' : '' }}>Girls' hostel</option>
                                        <option value="boys" {{ $property->type === 'boys' ? 'selected' : '' }}>Boys' hostel</option>      
                                        <option value="bedsitter" {{ $property->type === 'bedsitter' ? 'selected' : '' }}>Bed-Sitter</option>
                                        <option value="house" {{ $property->type === 'house' ? 'selected' : '' }}>House</option>                             
                                    </select>
                                </div>

                                <label  class="form-label">Property Status</label>
                                <div class="input-group input-group-outline mb-2">
                                    <select class="form-select px-3 text-muted" id="status" name="status" aria-label="Default select example" required>
                                        <option value="sale" {{ $property->status === 'sale' ? 'selected' : '' }}>For Sale</option>
                                        <option value="rent" {{ $property->status === 'rent' ? 'selected' : '' }}>For Rent</option>                              
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                        </form>

                        </div>
                    </div>
                    </div>
                    <!-- DELETE MODAL ---->
                    <div class="modal fade" id="deleteModal{{$property->id}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$property->id}}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="deleteModalLabel{{$property->id}}">Delete Property</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this property?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="{{ url('/myproperties/'.$property->id.'/delete') }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $properties->links() !!}
            </div>
        </div>
</div>
@endsection

@section('footer')

@endsection

@section('scripts')

@endsection



