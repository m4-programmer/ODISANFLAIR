@extends('layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <x-breadCrumb title="Create Posts" />
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
                            <h3 class="card-title">Edit Posts</h3>
                        </div>
                        
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                {{-- Alert to display message --}}
                                @if (session('message'))
                                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                                        {{session('message')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                {{--Category--}}
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="form-control select2" name="tag_id" style="width: 100%;">
                                        @foreach($categories as $data)
                                        <option value="{{$data->id}}" @if ($data->id == old('tag_id'))
                                            selected
                                        @endif>{{$data->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{--Title--}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" value="{{old('title')}}" name="title" placeholder="Enter title for post">
                                    @error('title')
                                    <label for="" class="text-danger">{{$message}}</label>
                                    @enderror
                                </div>
                                {{--Posts--}}
                                <div class="form-group">
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Posts
                                            </h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            
                                            <textarea id="summernote" name="post">
                                                {!! old('post') ? old('post') : 'Place <em>some</em> <u>text</u> <strong>here</strong>' !!}
                                            </textarea>
                                            
                                        </div>
                                        <div class="card-footer">
                                            Write an elagant post
                                        </div>
                                    </div>
                                    @error('post')
                                    <label for="" class="text-danger">{{$message}}</label>
                                    @enderror
                                    
                                </div>
                                {{--Cover--}}
                                <div class="form-group">
                                    <label for="">Cover Image</label>
                                    <input type="file" name="cover" class="form-control">
                                    {{--TO create Img Preview Here--}}
                                    @error('cover')
                                    <label for="" class="text-danger">{{$message}}</label>
                                    @enderror
                                </div>
                                {{--Likes--}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Likes</label>
                                    <input type="number" class="form-control" name="likes"  value="{{old('likes')}}" placeholder="likes" >
                                </div>
                                {{--Status--}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <select class="form-control select2" name="status" style="width: 100%;" required>
                                        <option  disabled>Select Status</option>
                                        <option  value="normal" @if (old('status') == 'normal') selected @endif>normal</option>
                                        <option  value="popular" @if (old('status') == 'popular') selected @endif>popular</option>
                                        <option  value="trending" @if (old('status') == 'trending') selected @endif>trending</option>
                                        <option  value="latest" @if (old('status') == 'latest') selected @endif>latest</option>
                                    </select>
                                    @error('status')
                                    <label for="" class="text-danger">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

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
