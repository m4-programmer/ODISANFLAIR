<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ManagePostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get()->load('user','tags','comments');
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
        $validated = $request->validate([
            'title' => 'required|unique:posts,title',
            'post' => 'required',
            'status'=>'required',
            'cover'=>'required|mimes:png,jpg',
            'url' => 'nullable',
        ]);
        $slug = Str::slug($request->title);
        if ($request->hasFile('cover')) {
            $cover = 'asset/uploads/userImage' . '/' . Str::random(32) . '.' . $request->cover->getClientOriginalExtension();
            $request->cover->move(public_path('asset/uploads/userImage'), $cover);
        }
        $result = Post::create([
            'title'=>$request->title,
            'post'=>$request->post,
            'cover'=>$cover,
            'slug'=>$slug,
            'likes'=>$request->likes ?? 0,
            'tag_id'=>$request->tag_id,
            'status'=>$request->status,
            'user_id'=>$request->user()->id ?? 1,
        ]);
        if ($request->url){
            $result->media()->create([
                'title'=>$request->title,
                'slug'=>$slug,
                'type'=>Media::VIDEO,
                'status'=>true,
                "url" => $request->url,
            ]);
        }
        if ($result){
            $message = 'post created successfully';
            Session::put('message',$message);
            return back()->with(['success',$message]);
        }else{
            $message = 'an error occurred';
            Session::put('message',$message);
            return back()->with(['error',$message]);
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
        $postId = Post::where('title',$request->title)->first()?->id;
        $validated = $request->validate([
            'title' => 'required|unique:posts,title,'.$postId,
            'post' => 'required',
            'status'=>'required',
            "created_at" => "required|date",
            'url' => 'nullable',
        ]);
        $slug = Str::slug($request->title);
        //to write logic to handle uploading the cover image
        if ($request->hasFile('cover')) {
            $cover = 'asset/uploads/userImage' . '/' . Str::random(32) . '.' . $request->cover->getClientOriginalExtension();
            $request->cover->move(public_path('asset/uploads/userImage'), $cover);
        }else{
            //we use the existing cover image
            $cover = $post->cover;
        }

        $result = $post->update([
            'title'=>$request->title,
            'post'=>$request->post,
            'cover'=>$cover,
            'slug'=>$slug,
            'likes'=>$request->likes?? 0,
            'tag_id'=>$request->tag_id,
            'status'=>$request->status,
            'user_id'=>$request->user()->id ?? 1,
        ]);
        $post->created_at = Carbon::parse($request->created_at);
        $post->save();
        $post->media()->update([
            'title'=>$request->title ?? $post->media->title,
            'slug'=>$slug ?? $post->media->slug,
            'type'=>Media::VIDEO,
            'status'=>true,
        ]);
        if ($request->url){
            $post->media()->update(["url" => $request->url]);
        }
        if ($result){
            return back()->with('success','post updated successfully');
        }else{
            return back()->with('error','an error occurred');
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
