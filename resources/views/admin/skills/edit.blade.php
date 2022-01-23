@extends('layouts.admin_layout')

@section('skills') active @endsection

@section('title')
    Skills Edit
@endsection


@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">Skills</span>
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

                            <form action="{{ url('update-skills') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $skills->id }}">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Skill Name</label>
                                    <input type="text" name="skill_name"
                                        class="form-control @error('skill_name') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ $skills->skill_name }}">

                                    @error('skill_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="form-group mt-5">
                                        <label for="exampleInputEmail1">Skill Percentage</label>
                                        <input type="text" name="skill_percent"
                                            class="form-control @error('skill_percent') is-invalid @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $skills->skill_percent }}">

                                        @error('skill_percent')
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
