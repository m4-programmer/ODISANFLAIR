@extends('layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <x-breadCrumb title="Posts" />
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header " style="display: flex;justify-content: space-between">
                            <h3 class="card-title">View Posts</h3>
                            <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Create Post</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Category</th>
                                    <th>Post Title</th>
                                    <th>Name</th>
                                    <th>Comment</th>
                                    <th>Replies</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $sn =1?>
                                @foreach($comments as $data)
                                    <tr>
                                        <td><?php echo $sn;  $sn++?></td>
                                        <td>{{$data->post->load('tags')->tags->title}}</td>
                                        <td>{{\Illuminate\Support\Str::words($data->post->title,15,'...')}}</td>
                                        <td>{{$data->user->name ?? $data->name}}</td>
                                        <td>{{\Illuminate\Support\Str::words($data->comment,15,'...')}}</td>
                                        <td>
                                            {{$data->replies->count()}}
                                        </td>
                                        <td>{{$data->created_at->format('F d Y')}}</td>
                                        <td class="d-flex justify-content-between">
                                            <div>
                                                <a class="btn btn-success btn-sm" href="{{route('admin.comments.edit',$data->id)}}" title="Edit Post"><i class="fas fa-edit"></i></a>
                                            </div>
                                            <div>
                                                <form action="{{route('admin.comments.destroy',$data->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm" title="Delete Post"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
