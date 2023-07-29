<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ManagePostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all()->load('user','tags','comments');
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Tag::all();
        return view('admin.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request;
        $validated = $request->validate([
            'title' => 'required|unique:posts,title',
            'post' => 'required',
            'status'=>'required'
        ]);
        $slug = Str::slug($request->title);
        $result = Post::create([
            'title'=>$request->title,
            'post'=>$request->post,
            'cover'=>$request->cover,
            'slug'=>$slug,
            'likes'=>$request->likes,
            'tag_id'=>$request->tag_id,
            'status'=>$request->status,
            'user_id'=>$request->user()->id ?? 1,
        ]);
        if ($result){
            return back()->with(['success','post created successfully']);
        }else{
            return back()->with(['error','an error occurred']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|unique:posts,title',
            'post' => 'required',
            'status'=>'required',
        ]);
        $slug = Str::slug($request->title);
        //to write logic to handle uploading the cover image
        $result = $post->update([
            'title'=>$request->title,
            'post'=>$request->post,
            'cover'=>$request->cover,
            'slug'=>$slug,
            'likes'=>$request->likes?? 0,
            'tag_id'=>$request->tag_id,
            'status'=>$request->status,
            'user_id'=>$request->user()->id ?? 1,
        ]);
        if ($result){
            return back()->with(['success','post updated successfully']);
        }else{
            return back()->with(['error','an error occurred']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return back()->with('success','post deleted successsfully');
        }catch (ModelNotFoundException $e){
            return back()->with('error','post not found');
        }
    }
}
