@extends('layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Maintenance Report</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Maintenance Report</h6>
        </nav>
@endsection

@section('content')
<div class="container text-muted">
    <div class="content-wrapper">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-center text-uppercase">maintenance report</h5>   
                    </div>
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                  <form action="{{ route('maintenance-reports.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Attachment</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Report</button>
                    </form>
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
