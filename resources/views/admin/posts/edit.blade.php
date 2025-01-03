@extends('layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <x-breadCrumb title="Edit Posts" />
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
                        <form action="{{route('admin.posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                {{-- Alert to display message --}}
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
                                {{--Title--}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" value="{{$post->title}}" name="title" placeholder="Enter title for post">
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
                                          <textarea id="tiny" name="post">
                                             {!! $post->post ?? 'Place <em>some</em> <u>text</u> <strong>here</strong>' !!}
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

                                {{--Slug--}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" class="form-control"   value="{{$post->slug}}" placeholder="slug" disabled>
                                </div>
                                {{--Likes--}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Likes</label>
                                    <input type="text" class="form-control" name="likes"  value="{{$post->likes}}" placeholder="likes" >
                                </div>
                                
                                {{--Created At--}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Created At</label>
                                    <input type="datetime-local" class="form-control" name="created_at"  value="{{$post->created_at ? $post->created_at->format('Y-m-d\TH:i') : ''}}" placeholder="created at" >
                                    @error('created_at')
                                    <label for="" class="text-danger">{{$message}}</label>
                                    @enderror
                                </div>
                                {{--Tag_id--}}
                                <input type="hidden" class="form-control" name="tag_id"  value="{{$post->tag_id}}" placeholder="likes" >
                                {{--Status--}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status {{$post->status}}</label>
                                    <select class="form-control select2" name="status" style="width: 100%;" required>
                                        <option  disabled>Select Status</option>
                                        <option  value="normal" @if (old('status') == 'normal' || $post->status == 'normal') selected @endif>normal</option>
                                        <option  value="popular" @if (old('status') == 'popular' || $post->status == 'popular') selected @endif>popular</option>
                                        <option  value="trending" @if (old('status') == 'trending'|| $post->status == 'trending') selected @endif>trending</option>
                                        <option  value="latest" @if (old('status') == 'latest' || $post->status == 'latest') selected @endif>latest</option>
                                    </select>
                                    @error('status')
                                    <label for="" class="text-danger">{{$message}}</label>
                                    @enderror
                                </div>





                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="{{route('admin.posts.index')}}" class="btn btn-success">Go Back </a>
                                <button type="submit" class="btn btn-primary">Update </button>
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
