@extends('layouts.admin_layout')

@section('skills') active @endsection

@section('title')
    Skills
@endsection


@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">Skills</span>
        </nav>


        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="col-md-8">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">Skill list</h6>


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
                                        <th class="wd-15p">Percentage</th>
                                        <th class="wd-25p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($skills as $row)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$row->skill_name}}</td>
                                            <td>{{$row->skill_percent}}%</td>
                                            <td>
                                                <a href="{{ url('skills/edit/' . $row->id) }}"
                                                    class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>

                                                <a href="{{ url('skills/delete/' . $row->id) }}"
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
                        <div class="card-header">Skills
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

                            <form action="{{ url('store-skills') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="skill_name"
                                        class="form-control @error('skill_name') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="HTML">

                                    @error('skill_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Percentage</label>
                                    <input type="text" name="skill_percent"
                                        class="form-control @error('skill_percent') is-invalid @enderror" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="100">

                                    @error('skill_percent')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <button type="submit" class="btn btn-primary">Add Skill</button>
                            </form>

                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    
          @endsection
