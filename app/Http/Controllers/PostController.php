<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($category,$post_slug)
    {
        $verify = Tag::where('title',$category)->orWhere('slug',$category)->exists();
        if ($verify){
            $title = $post_slug;
            $tag = $category;
            $post = Post::where('slug',$post_slug)->first();
            $posts = Post::latest()->get();
            $recommended = $posts->random(3);
            $comments = $post->comments;

            return view('single',compact('title','post','recommended','tag','comments'));
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $ip = ['ipAddress' => $request->ip()];
        Comment::create(array_merge($request->validated(), $ip));
        return back()->with(['success' => 'Comment stored successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
