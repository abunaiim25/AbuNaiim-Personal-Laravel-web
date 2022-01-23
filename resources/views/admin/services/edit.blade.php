@extends('layouts.admin_layout')

@section('services') active show-sub @endsection

@section('add-services') active @endsection

@section('title')
    Services Edit
@endsection


@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">Services</span>
        </nav>


        <div class="sl-pagebody">
            <div class="row row-sm">


                <div class="col-md-8 m-auto">
                    <div class="card">
                        <div class="card-header">Update Skill
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

                            <form action="{{ url('update-services') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $services->id }}">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="service_name"
                                        class="form-control @error('service_name') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ $services->service_name }}">

                                    @error('service_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                    <div class="form-group mt-5">
                                        <label for="exampleInputEmail1">Icon</label>
                                        <input type="text" name="service_icon"
                                            class="form-control @error('service_icon') is-invalid @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $services->service_icon }}">

                                        @error('service_icon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                            <textarea type="text" name="services_des" id="services_des"  rows="4" class="form-control"  aria-describedby="emailHelp" >{{ $services->services_des }}</textarea>
                                    </div>
    

                                    <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
          @endsection

