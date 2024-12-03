@extends('layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <x-breadCrumb title="Edit Library Tags" />
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Library Tags</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.library_tags.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                                        {{session('success')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                                        {{session('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Enter title for category">
                                    @error('title')
                                    <label for="" class="text-danger">{{$message}}</label>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <select class="form-control select2" name="status" style="width: 100%;">
                                        <option value="active" selected="selected">Active</option>
                                        <option value="pending">Pending</option>
                                    </select>
                                    @error('status')
                                    <label for="" class="text-danger">{{$message}}</label>
                                    @enderror
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Create Library Tags</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>


            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
