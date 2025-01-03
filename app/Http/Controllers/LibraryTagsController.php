<?php

namespace App\Http\Controllers;

use App\Models\LibraryTags;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LibraryTagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = LibraryTags::orderBy('created_at','desc')->get()->load('posts');
        return view('admin.library_tags.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.library_tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:tags,title',
            'status'=>'required'
        ]);
        $slug = Str::slug($request->title);
        $result = LibraryTags::create([
            'title'=>$request->title,
            'status'=>$request->status,
            'user_id'=>$request->user()->id ?? 1,
            'slug'=>$slug
        ]);
        if ($result){
            return back()->with('success','library tags created successfully');
        }else{
            return back()->with('error','an error occurred');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(LibraryTags $libraryTags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LibraryTags $libraryTags)
    {
        return view('admin.library_tags.edit',compact('libraryTags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LibraryTags $libraryTags)
    {
        $request->validate([
            'title' => 'required|unique:tags,title,'.$libraryTags->id,
            'status'=>'required'
        ]);
        $slug = Str::slug($request->title);
        $result = $libraryTags->update([
            'title'=>$request->title,
            'status'=>$request->status,
            'user_id'=>$request->user()->id ?? 1,
            'slug'=>$slug
        ]);
        if ($result){
            return back()->with('success','library tags updated successfully');
        }else{
            return back()->with('error','an error occurred');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LibraryTags $libraryTags)
    {
        try {
        $libraryTags->delete();
        return back()->with('success','library tag deleted successfully');
    }catch (ModelNotFoundException $e){
        return back()->with('error','category not found');
    }
    }
}
