<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $tags = Tag::all();
        $posts = Post::latest()->get();
        $posts->load('comments','tags','user');
        $firstFivePosts = $posts->random(5);
        $latestPosts = $posts->take(4);
        $popular = $posts->random(6);
        $author = User::find(1);
        $author->load('posts');
        $recommended = $posts->random(3);
        $comments = Comment::get()->random(3);
        //footer var

//        Post::latest()->fiilter(\request('tag','search'))->get();
        return view('welcome',compact('tags','firstFivePosts','latestPosts','author','popular','recommended','comments'));
    }

    public function category(Request $request,$title){

        return "yes";
        return view('category',compact('title'));
    }
}
