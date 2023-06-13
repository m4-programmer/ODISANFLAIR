<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($title)
    {
        $tag = Tag::where('title', $title)->first();

        if ($tag) {
            $tagId = $tag->id;
            $posts = Post::where('tag_id', $tagId)->paginate(8);
            $sidePost = Post::latest()->get();

            // URL-encode the title parameter for proper formatting in URLs
            $encodedTitle = urlencode($title);
            return view('category',compact('title','encodedTitle','posts','sidePost'));        } else {
            // Handle the case when the tag with the given title is not found
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
