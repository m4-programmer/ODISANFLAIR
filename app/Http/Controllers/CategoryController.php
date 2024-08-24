<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($title)
    {
        $tag = Tag::where('title', $title)->orWhere('slug',$title)->first();
        if (!$tag){
            $posts = [];
            $sidePost = Post::latest()->get();
            $encodedTitle = urlencode($title);
        }
        else{
            $tagId = $tag->id;
            $posts = Post::where('tag_id', $tagId)->paginate(8);
            $sidePost = Post::latest()->get();

            // URL-encode the title parameter for proper formatting in URLs
            $encodedTitle = urlencode($title);
        }
        return view('category',compact('title','encodedTitle','posts','sidePost'));
    }

    public function dynamicContent($slug)
    {
        $tag = Tag::where('title', $slug)->orWhere('slug',$slug)->first();
        if ($tag){
            $posts = Post::latest()->get();
            $sidePost = Post::latest()->get();
            $title = $tag?->title;
            $searchData = $tag?->posts?->take(12);
            $popular = $posts->random(6);
            $author = User::find(1);
            $author->load('posts');
            $recommended = $posts->random(3);
            $comments = Comment::get()->random(3);
            return view('dynamic_content', compact('posts', 'sidePost','searchData','title','author','popular','recommended','comments'));
        }
        abort(404);
    }
    public function latest(){
        $posts = Post::where('status', 'latest')->paginate(8);
        if (!$posts->count()){
            $posts = Post::latest()->paginate(8);
        }
        $title = "Latest";
        $sidePost = Post::latest()->get();
        return view('category',compact('posts','title','sidePost'));
    }
    public function popular(){
        $posts = Post::where('status', 'popular')->paginate(8);
        if (!$posts->count()){
            $posts = Post::latest()->paginate(8);
        }
        $title = "Popular";
        $sidePost = Post::latest()->get();
        return view('category',compact('posts','title','sidePost'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
