@extends('layouts.admin_layout')

@section('home') active @endsection

@section('title')
    About
@endsection


@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">Home</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="col-md-12">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title"> Home</h6>

                        <form action="{{ url('admin-home-update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT' )}}
                            <div class="row">
            
                                <div class="form-group col-md-5 mt-3">
                                    <h4>Profile Image</h4>
                                    <img style="height: 50vh" src="{{ url($home->profile_img) }}" class="img-thumbnail" alt="">
                                    <input class="mt-3" type="file" name="profile_img" id="profile_img">
                                </div>

                                <div class="form-group col-md-7 mt-3">
                                    <h4>Background Image</h4>
                                    <img style="height: 50vh" src="{{ url($home->bg_img) }}" class="img-thumbnail" alt="">
                                    <input class="mt-3" type="file" name="bg_img" id="bg_img">
                                </div>

                                <div class="col-md-5 mt-3">
                                    <label for="name">
                                        <h4>Username</h4>
                                    </label>
                                    <input type="text" class="form-control " id="name" name="name" value="{{$home->name}}">
                                </div>
            
                               
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary mt-4">
                        </form>


                    </div>
                </div>
            </div>
        @endsection
