<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalCategories = Tag::count();
        $totalPosts = Post::count();
        $totalComments = Comment::count();
        $totalUniqueVisitors = 100;
        $totalLikes = 150;
        return view('admin.dashboard',compact('totalCategories','totalPosts','totalComments','totalUniqueVisitors','totalLikes'));
    }
}
