<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ManageVideosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Media::where("type", "video")->orderBy('created_at','desc')->get();
        return view('admin.videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:media,title,NULL,id,type,video',
            'url' => 'required',
        ]);
        $data['slug'] = Str::slug($request->title);
        $data['type'] = Media::VIDEO;
        $data['status'] = true;

        $result = Media::create($data);
        if ($result){
            $message = 'video created successfully';
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
    public function destroy(Media $video)
    {
        $video->delete();
        return back()->with("message", "deleted successfully");
    }
}
