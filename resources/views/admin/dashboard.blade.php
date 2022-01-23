@extends('layouts.admin_layout')

{{--for active sidebar--}}
@section('dashboard') active @endsection

@section('title')
Dashboard
@endsection


@section('admin_content')
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="#">Admin</a>
      <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">

    

    </div><!-- sl-pagebody -->
    

  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
    

  @endsection

