@extends('landlord.layouts.master')



@section('content')
    <div class="row justify-content-between">
        @if(session('success'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">Success!</h4>
            <p class="mb-0">New property was added successfully!</p>
        </div>
        @endif
        <div class="col-md-3">
            <h3>Add Property</h3>
            <form action="/uploadProperty" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Property Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="price">Property Price</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="price">
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="files" class="form-label mt-4">Upload property Images</label>
                    <input type="file" name="image[]" class="form-control" accept="image/*" multiple>
                </div>
                <div class="mt-4">
                    <button type="submit">Upload Property</button>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <h3>Property</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Property Title</th>
                        <th>Property Price</th>
                        <th>Total Pictures</th>
                        <th>View Pictures</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @forelse ($properties as $property)
                        <tr>
                            <td>{{$i++;}}</td>
                            <td>{{$property->title}}</td>
                            <td>{{$property->price}}</td>
                            <td>10</td>
                            <td>
                                <a href="#" class="btn btn-outline-dark">View</a>
                            </td>

                        </tr>

                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No Property yet!</td>
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
