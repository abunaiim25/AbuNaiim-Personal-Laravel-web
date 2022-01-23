@extends('layouts.admin_layout')

{{--for active sidebar--}}
@section('contact') active @endsection

@section('title')
    Contact
@endsection


@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">Contact</span>
        </nav>

        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title"> Contact</h6>

                    <form action="{{ url('des-contact-update') }}" method="POST" >
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">

                            <div class="col-md-12 mt-3">
                                <label for="top_des">
                                    <h4>Contact Description</h4>
                                </label>
                                    <textarea type="text" name="top_des" id="top_des"  rows="5" class="form-control">{{ $contact_des->top_des }}</textarea>
                            </div>

                            <input type="submit" name="submit" class="btn btn-primary mt-4">
                        </div>
                    </form>

                </div>
            </div>
        </div>
       
          @endsection
