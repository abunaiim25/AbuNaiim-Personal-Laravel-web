@extends('layouts.admin_layout')

@section('social') active @endsection

@section('title')
    Social Media Edit
@endsection


@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">Social Media</span>
        </nav>


        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="col-md-8 m-auto">
                    <div class="card">
                        <div class="card-header">Update Social Media
                        </div>

                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('success') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <form action="{{ url('update-social') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $social->id }}">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Font Awesome Icon</label>
                                    <input type="text" name="icon"
                                        class="form-control @error('icon') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ $social->icon }}">

                                    @error('icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="form-group mt-5">
                                        <label for="exampleInputEmail1">Social Media Link</label>
                                        <input type="text" name="link"
                                            class="form-control @error('link') is-invalid @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $social->link }}">

                                        @error('link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
          @endsection
