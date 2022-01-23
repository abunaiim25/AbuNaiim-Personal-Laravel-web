@extends('layouts.admin_layout')

@section('social') active @endsection

@section('title')
    Social Media
@endsection


@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">Social Media</span>
        </nav>


        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">Social Media list</h6>


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
                                        <th class="wd-15p">Font Awesome Icon</th>
                                        <th class="wd-15p">Social Media Link</th>
                                        <th class="wd-25p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($social as $row)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$row->icon}}</td>
                                            <td>{{ Str::limit(strip_tags($row->link),40)}}</td>
                                            <td>
                                                <a href="{{ url('social/edit/' . $row->id) }}"
                                                    class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>

                                                <a href="{{ url('social/delete/' . $row->id) }}"
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
                        <div class="card-header">Social Media
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


                            <form action="{{ url('store-social') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Font Awesome Icon</label>
                                    <input type="text" name="icon"
                                        class="form-control @error('icon') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="fab fa-facebook">

                                    @error('icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Social Media Link</label>
                                    <input type="text" name="link"
                                        class="form-control @error('link') is-invalid @enderror" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="https://www.facebook.com/abunaiim">

                                    @error('link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <button type="submit" class="btn btn-primary">Add Social Media</button>
                            </form>

                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    
          @endsection
