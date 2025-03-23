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
                        <div class="card-header" style="display: flex; justify-content: space-between">
                            <h3 class="card-title">View Posts</h3>
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Create Post</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
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
                                <?php $sn = 1; ?>
                                @foreach($comments as $data)
                                    <tr>
                                        <td>{{ $sn++ }}</td>
                                        <td>{{ $data->post->load('tags')->tags->title }}</td>
                                        <td>{{ \Illuminate\Support\Str::words($data->post->title, 15, '...') }}</td>
                                        <td>{{ $data->user->name ?? $data->name }}</td>
                                        <td>{{ \Illuminate\Support\Str::words($data->comment, 15, '...') }}</td>
                                        <td>{{ $data->replies->count() }}</td>
                                        <td>{{ $data->created_at->format('F d Y') }}</td>
                                        <td class="d-flex justify-content-between">
{{--                                            <div>--}}
{{--                                                <a class="btn btn-success btn-sm" href="{{ route('admin.comments.edit', $data->id) }}" title="Edit Post">--}}
{{--                                                    <i class="fas fa-edit"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
                                            <div>
                                                <form action="{{ route('admin.comments.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm" title="Delete Post">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div>
                                                <!-- View Button -->
                                                <a class="btn btn-info btn-sm" href="{{ route('viewSinglePost', [$data->post->tags->title, $data->post->slug]) }}#comment-{{ $data->id }}" title="View Comment on Post" target="_blank">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                            <div>
                                                <!-- Reply Button (Opens Modal) -->
                                                <button class="btn btn-primary btn-sm reply-btn" data-comment="{{ $data->id }}" data-replies="{{ json_encode($data->replies) }}" title="Reply to Comment">
                                                    <i class="fas fa-reply"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
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

    <!-- Reply Modal -->
    <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="replyModalLabel">Reply to Comment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Existing Replies:</h6>
                    <ul id="repliesList" class="list-group mb-3"></ul>

                    <h6>Reply:</h6>
                    <form id="replyForm">
                        @csrf
                        <input type="hidden" id="commentId" name="comment_id">
                        <textarea class="form-control" name="reply" id="replyText" rows="3" required></textarea>
                        <button type="submit" class="btn btn-primary mt-2">Submit Reply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



