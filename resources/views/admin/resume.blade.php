@extends('layouts.admin_layout')

@section('resume') active @endsection

@section('title')
    Resume
@endsection


@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">Resume</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="col-md-12">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title"> Resume</h6>


                        
            <form action="{{ url('admin-resume-update') }}" method="POST" >
                @csrf
                {{ method_field('PUT' )}}

                <div class="row mb-5">
                    <div class="col-md-12 my-3 ">
                        <label for="top_description">
                            <h4>Top Description</h4>
                        </label>
                            <textarea type="text" name="head_des" id="head_des"  rows="3" class="form-control">{{ $resume->head_des }}</textarea>
                    </div>
                </div>
                
                <div class="row mt-5 mb-5">

                        <div class="col-md-4 mt-2">
                            <label for="study_sub">
                                <h4>Study Subject</h4>
                            </label>
                            <input type="text" class="form-control" id="study_sub" name="study_sub" value="{{ $resume->study_sub }}">
                        </div>

                        <div class=" col-md-4 mt-2">
                            <label for="study_date">
                                <h4>Study Data</h4>
                            </label>
                            <input type="text" class="form-control" id="study_date" name="study_date"
                                value="{{ $resume->study_date }}">
                        </div>

                        <div class=" col-md-4 mt-2">
                            <label for="study_date">
                                <h4>Studay Place</h4>
                            </label>
                            <input type="text" class="form-control" id="study_place" name="study_place"
                                value="{{ $resume->study_place }}">
                        </div>

                        <div class=" col-md-12 mt-2">
                            <label for="study_date">
                                <h4>Study Description</h4>
                            </label>
                            <textarea name="study_des" id="summernote">{{ $resume->study_des }}</textarea>
                            @error('study_des')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                </div>


                <div class="row mt-5">
                        <div class="col-md-4 mt-2">
                            <label for="work_sub">
                                <h4>Work Subject</h4>
                            </label>
                            <input type="text" class="form-control" id="work_sub" name="work_sub" value="{{ $resume->work_sub }}">
                        </div>

                        <div class=" col-md-4 mt-2">
                            <label for="work_date">
                                <h4>Work Data</h4>
                            </label>
                            <input type="text" class="form-control" id="work_date" name="work_date"
                                value="{{ $resume->work_date }}">
                        </div>


                        <div class=" col-md-12 mt-2">
                            <label for="work_des">
                                <h4>Study Description</h4>
                            </label>
                            <textarea name="work_des" id="summernote2">{{ $resume->work_des }}</textarea>
                            @error('work_des')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                </div>


                <input type="submit" name="submit" class="btn btn-primary mt-4">
            </form>
                      
                    </div>
                </div>
            </div>
        @endsection
