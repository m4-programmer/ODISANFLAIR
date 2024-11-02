<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Service\WebsiteTrafficService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(public WebsiteTrafficService $traffic){

    }

    public function index(){
        $totalCategories = Tag::count();
        $totalPosts = Post::count();
        $totalComments = Comment::count();
        $totalLikes = 150;

        $totalUniqueVisitors = $this->traffic->getAllUniqueVisitors();
        $todayVisitors = $this->traffic->getTodayUniqueVisitors();
        $mostVisitedPage = $this->traffic->getMostVisitedPages();
        $visitorsByDevice = $this->traffic->getVisitorByDeviceType();
        return view('admin.dashboard',compact('totalCategories','totalPosts','totalComments','totalUniqueVisitors','totalLikes', 'todayVisitors','mostVisitedPage',
            'visitorsByDevice'));
    }
}
