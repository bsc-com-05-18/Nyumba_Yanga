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
<div class="container-fluid">
  <!--  -->

      <!--  -->
      <div class="col-md-12">
            <h3>Property</h3>
           
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Size</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                    $i=1;
                    @endphp
                    @forelse ($properties as $property )

                        <tr>
                            <td>{{$i++;}}</td>
                            <td>{{$property->title}}</td>
                            <td>{{$property->location}}</td>
                            <td>{{$property->title}}</td>
                            <td>{{$property->description}}</td>
                            <td>{{$property->size}}</td>
                            <td>{{$property->address}}</td>
                            <td>
                        <img src="{{ asset('/images/'.$property->image) }}" alt="" class="img-fluid">             
                            </td>
                            <td>
                                <!-- <a href="product-images/{id}" type="button" class="btn text-white btn-info">View</a> -->
                                <a href="{{url('edit/'.$property->id)}}" type="button" class="btn text-white btn-success">Edit</a>
                                <a href="{{url('delete/'.$property->id)}}" type="button" class="btn text-white btn-danger">Delete</a>
                            </td>

                        </tr>

                    @empty
                    <tr>
                        <td colspan="8" class="text-center">No Property yet!</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
</div>
@endsection

@section('footer')

@endsection

@section('scripts')

@endsection



