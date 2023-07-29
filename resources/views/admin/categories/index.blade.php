@extends('layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <x-breadCrumb title="Categories" />
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header " style="display: flex;justify-content: space-between">
                            <h3 class="card-title">View Categories</h3>
                            <a href="{{route('admin.categories.create')}}" class="btn btn-primary">Create Category</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Category</th>
                                    <th>Created By</th>
                                    <th>Status</th>
                                    <th>Posts</th>
                                    <th>Slug</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $sn =1?>
                                @foreach($categories as $data)
                                <tr>
                                    <td><?php echo $sn;  $sn++?></td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->user->name}}</td>
                                    <td><span class="badge badge-{{($data->status == 'active') ? 'success' : 'danger'}}">{{ $data->status}}</span></td>
                                    <td>{{$data->posts->count()}}</td>
                                    <td>{{$data->slug}}</td>
                                    <td>{{$data->created_at->format('F d Y')}}</td>
                                    <td class="d-flex justify-content-between">
                                        <a class="btn btn-success btn-sm" href="{{route('admin.categories.edit',$data->id)}}"> Edit Category</a>
                                        <form action="{{route('admin.categories.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" > Delete Category</button>
                                        </form>
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
