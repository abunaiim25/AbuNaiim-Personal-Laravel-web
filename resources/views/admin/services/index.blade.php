@extends('layouts.admin_layout')

@section('services') active show-sub @endsection

@section('add-services') active @endsection

@section('title')
    Services
@endsection


@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">Services</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">Services list</h6>


                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('status') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if(session('status_inactive'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{session('status_inactive')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          @endif
                        @if (session('delete'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('delete') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        

                        
                        <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">Sl</th>
                                        <th class="wd-15p">Name</th>
                                        <th class="wd-15p">Icon</th>
                                        <th class="wd-15p">Description</th>
                                        <th class="wd-25p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($services as $row)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$row->service_name}}</td>
                                            <td>{{$row->service_icon}}</td>
                                            <td>{{ Str::limit(strip_tags($row->services_des),30)}}</td>
                                            <td>
                                                <a href="{{ url('services/edit/' . $row->id) }}"
                                                    class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>

                                                <a href="{{ url('services/delete/' . $row->id) }}"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you shure to delete?')"><i
                                                        class="fa fa-trash"></i></a>
                                               
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- table-wrapper -->
                    </div><!-- card -->
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Services
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

                            <form action="{{ url('store-services') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="service_name"
                                        class="form-control @error('service_name') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SHOPPING CART">

                                    @error('service_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Icon</label>
                                    <input type="text" name="service_icon"
                                        class="form-control @error('service_icon') is-invalid @enderror" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="fas fa-shopping-cart">

                                    @error('service_icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                        <textarea type="text" name="services_des" id="services_des"  rows="4" class="form-control"  aria-describedby="emailHelp" ></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Services</button>
                            </form>

                            
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
       
          @endsection
