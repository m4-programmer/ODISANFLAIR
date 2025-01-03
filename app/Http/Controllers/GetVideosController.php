<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Media;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class GetVideosController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $title = "Videos";
        $posts = Post::latest()->get();
        $sidePost = Post::latest()->get();
        $author = User::find(1);
        $author->load('posts');
        $recommended = $posts->random(3);
        $comments = Comment::get()->random(3);
        $anotherNews = $posts->random(5);
        $hotNews = $posts->random(8);
        $popular = $posts->random(6);
        $videos = Media::video()->active()->latest()->paginate();
        return view("videos",compact("videos", "title",'posts', 'sidePost', 'recommended','comments', 'anotherNews', 'hotNews',"author","popular"));
    }
}
