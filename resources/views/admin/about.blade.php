@extends('layouts.admin_layout')

@section('about') active @endsection

@section('title')
    About
@endsection


@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">About</span>
        </nav>


        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title"> Home</h6>

                    <form action="{{ url('admin-about-update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">

                            <div class="form-group col-md-3 mt-3">
                                <h4>About Image</h4>
                                <img style="height: 30vh" src="{{ url($about->image) }}" class="img-thumbnail" alt="">
                                <input class="mt-3" type="file" name="image" id="image">
                            </div>


                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4 mt-3">
                                        <label for="title">
                                            <h4>Title</h4>
                                        </label>
                                        <input type="text" class="form-control " id="title" name="title"
                                            value="{{ $about->title }}">
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label for="birth">
                                            <h4>Birthday</h4>
                                        </label>
                                        <input type="text" class="form-control " id="birth" name="birth"
                                            value="{{ $about->birth }}">
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label for="age">
                                            <h4>Age</h4>
                                        </label>
                                        <input type="text" class="form-control " id="age" name="age"
                                            value="{{ $about->age }}">
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label for="web">
                                            <h4>Website</h4>
                                        </label>
                                        <input type="text" class="form-control " id="web" name="web"
                                            value="{{ $about->web }}">
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label for="degree">
                                            <h4>Degree</h4>
                                        </label>
                                        <input type="text" class="form-control " id="degree" name="degree"
                                            value="{{ $about->degree }}">
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label for="phone">
                                            <h4>Phone</h4>
                                        </label>
                                        <input type="text" class="form-control " id="phone" name="phone"
                                            value="{{ $about->phone }}">
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label for="email">
                                            <h4>Email</h4>
                                        </label>
                                        <input type="text" class="form-control " id="email" name="email"
                                            value="{{ $about->email }}">
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label for="city">
                                            <h4>City</h4>
                                        </label>
                                        <input type="text" class="form-control " id="city" name="city"
                                            value="{{ $about->city }}">
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label for="work">
                                            <h4>Work</h4>
                                        </label>
                                        <input type="text" class="form-control " id="work" name="work"
                                            value="{{ $about->work }}">
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="top_description">
                                    <h4>Top Description</h4>
                                </label>
                                    <textarea type="text" name="top_description" id="top_description"  rows="3" class="form-control">{{ $about->top_description }}</textarea>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="bottom_description">
                                    <h4>Bottom Description</h4>
                                </label>
                                    <textarea type="text" name="bottom_description" id="bottom_description"  rows="3" class="form-control">{{ $about->bottom_description }}</textarea>
                            </div>
                            

                            <input type="submit" name="submit" class="btn btn-primary mt-4">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    @endsection
