@extends('layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <x-breadCrumb title="Create Comment" />
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
                            <h3 class="card-title">Create Comment</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.comments.store')}}" method="post" >
                            @csrf


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Create </button>
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
