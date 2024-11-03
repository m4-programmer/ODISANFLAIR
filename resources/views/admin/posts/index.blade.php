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
                                    <th>Has Video</th>
                                    <th>Created By</th>
                                    <th>Status</th>
                                    <th>Comments</th>
                                    <th>Slug</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $sn =1?>
                                @foreach($posts as $data)
                                    <tr>
                                        <td><?php echo $sn;  $sn++?></td>
                                        <td>{{$data->tags->title}}</td>
                                        <td>{!! \Illuminate\Support\Str::words($data->title,10,'...') !!}</td>
                                        <td>{{$data}}</td>
                                        <td>{{$data->user->name}}</td>
                                        <td><span class="badge badge-{{($data->status == 'active') ? 'success' : 'danger'}}">{{ $data->status}}</span></td>
                                        <td>
                                            {{$data->comments->count()}}
                                            <a href="{{route('admin.comments.index')}}" class="badge badge-primary"><i class="fas fa-search"></i></a>
                                        </td>
                                        <td>{{$data->slug}}</td>
                                        <td>{{$data->created_at->format('F d Y')}}</td>
                                        <td class="d-flex justify-content-between">
                                            <div>
                                                <a class="btn btn-success btn-sm" href="{{route('admin.posts.edit',$data->id)}}" title="Edit Post"><i class="fas fa-edit"></i></a>
                                            </div>
                                            <div>
                                                <form action="{{route('admin.posts.destroy',$data->id)}}" method="post">
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
