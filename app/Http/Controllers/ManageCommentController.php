<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class ManageCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::whereNull("parent_id")->orderBy('created_at','desc')->get()->load('user','post','replies');
        return view('admin.comments.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return view('admin.comments.edit',compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('admin.comments.edit',compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'reply' => 'required|string'
        ]);
//        dd($request->reply, $comment);

        Comment::create([
            "post_id" => $comment->post->id,
            "parent_id" => $comment->id,
            "user_id" => auth()->user()->id,
            "comment" => $request->reply,
            'ipAddress' => $request->ip()
        ]);

        return response()->json(['success' => true]);

    }

    public function editReply(Request $request, Comment $reply)
    {
        $reply->update(["comment" => $request->comment]);
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back()->with('success','deleted successfully');
    }
}
