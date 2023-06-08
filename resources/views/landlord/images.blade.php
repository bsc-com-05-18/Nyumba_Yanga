@extends('landlord.layouts.master')



@section('content')
    <div class="row justify-content-between">
        
        <div class="col-md-12">
            <h3>Images</h3>
           <div class="row mt-4">
       
            <div class="col-md-12">
                    <div class="card-body">
                    
                    <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Property Title</th>
                        <th>Images</th>
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
                            <td>
                            @php
                        $image = DB::table('properties')->where('id', 1)->first();
                        $images = explode('|', $image->image);
                    @endphp
                    @foreach ($images as $item)
                        <img src="{{URL::to($item)}}" style="height:60px; width:60px;" alt=""><br>
                    @endforeach
                                
                            </td>
                            <td>
                                <a href="#" type="button" class="btn text-white btn-success">Edit</a>
                                <a href="#" type="button" class="btn text-white btn-danger">Delete</a>
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
           </div>
        </div>
        
    </div>
@endsection

@section('footer')
               
@endsection

@section('scripts')

@endsection
