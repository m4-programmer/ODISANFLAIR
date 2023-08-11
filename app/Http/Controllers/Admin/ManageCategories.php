<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ManageCategories extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Tag::orderBy('created_at','desc')->get()->load('posts');
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:tags,title',
            'status'=>'required'
        ]);
        $slug = Str::slug($request->title);
        $result = Tag::create([
            'title'=>$request->title,
            'status'=>$request->status,
            'user_id'=>$request->user()->id?? 1,
            'slug'=>$slug
        ]);
        if ($result){
            return back()->with('success','category created successfully');
        }else{
            return back()->with('error','an error occurred');
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
    public function edit(Tag $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $category)
    {
        $tagId = Tag::where('title',$request->title)->first()?->id;
        $validated = $request->validate([
            'title' => 'required|unique:tags,title,'.$tagId,
            'status'=>'required'
        ]);
        $slug = Str::slug($request->title);
        $result = $category->update([
            'title'=>$request->title,
            'status'=>$request->status,
            'user_id'=>$request->user()->id ?? 1,
            'slug'=>$slug
        ]);
        if ($result){
            return back()->with('success','category updated successfully');
        }else{
            return back()->with('error','an error occurred');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $category)
    {
        try {
            $category->delete();
            return back()->with('success','category deleted successsfully');
        }catch (ModelNotFoundException $e){
            return back()->with('error','category not found');
        }
    }
}
