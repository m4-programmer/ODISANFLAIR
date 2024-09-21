@extends('layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <x-breadCrumb title="Manage Videos" />
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header " style="display: flex;justify-content: space-between">
                            <h3 class="card-title">Manage Video</h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Add Video
                            </button>
{{--                            <a href="{{route('admin.videos.create')}}" class="btn btn-primary">Add Video</a>--}}
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Title</th>
                                    <th>Youtube Link</th>
                                    <th>Views</th>
                                    <th>Status</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $sn =1?>
                                @foreach($videos as $data)
                                    <tr>
                                        <td><?php echo $sn;  $sn++?></td>
                                        <td>{{$data?->title}}</td>
                                        <td>{{$data?->url}}</td>
                                        <td>{{$data->views}}</td>
                                        <td>
                                            {{$data->status ? "Active" : "Inactive"}}
                                        </td>
                                        <td>{{$data->created_at->format('F d Y')}}</td>
                                        <td class="d-flex justify-content-between">
                                            <div>
                                                <a class="btn btn-success btn-sm" href="{{route('admin.videos.edit',$data->slug)}}" title="View Video"><i class="fas fa-edit"></i></a>
                                            </div>
                                            <div>
                                                <form action="{{route('admin.videos.destroy',$data->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm" title="Delete Video"><i class="fas fa-trash-alt"></i></button>
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

    {{--Create Video Modal--}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.videos.store')}}" method="post" >
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp" placeholder="Enter Video Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Youtube Link</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="url" placeholder="Enter Youtube Link">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
