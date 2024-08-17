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
        $tags = Tag::all()->random(10);
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


        return view('welcome',compact('tags','firstFivePosts','latestPosts','author','popular','recommended','comments','posts'));
    }

    public function category(Request $request,$title){

        return "yes";
        return view('category',compact('title'));
    }
    public function search(Request $request){
        $query = $request->q;

        $result = Post::latest()->filter($request->all())->paginate(10);
        $totalCount = $result->total();
        return  view('search', compact('result','query','totalCount'));
    }

    public function portfolio(){
        $quotes = (object)[
            (object)[
                "href" => "images-portfolio/folio/gallery/Piture6.png",
                "img"=> "images-portfolio/folio/Piture6@2x.png",
                "h4"=> "In the nick of time",
                "sub" => "Daniel- TIMING",
                "p" =>"Somethings happened just at the right moment to prevent disaster or to achieve
                            a positive outcome.Have a good timing and seizing the moment."
            ],
            (object)[
                "href" => "images-portfolio/folio/gallery/Piture5.png",
                "img"=> "images-portfolio/folio/Piture5@2x.png",
                "h4"=> "The world is your oyster",
                "sub" => "Daniel- You're Gifted.",
                "p" =>" You have the freedom and ability to achieve anything you want in life.
                            Your potentials, opportunities, and the abundance of possibilities are all around you."
            ],
            (object)[
                "href" => "images-portfolio/folio/gallery/Piture7.png",
                "img"=> "images-portfolio/folio/Piture7@2x.png",
                "h4"=> "Every cloud has a silver lining",
                "sub" => "Daniel- Optimism",
                "p" =>"Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus
                        deleniti facilis ab, tempora non! Nisi, tempora provident."
            ],
            (object)[
                "href" => "images-portfolio/folio/gallery/Piture1.png",
                "img"=> "images-portfolio/folio/Piture1@2x.png",
                "h4"=> "Money talks",
                "sub" => "Daniel- FINANCE",
                "p" =>"Money can influence people and decisions. In the context of trading and business,
                        Never underrate the power and importance of Financial Resources."
            ],
            (object)[
                "href" => "images-portfolio/folio/gallery/Picture12.png",
                "img"=> "images-portfolio/folio/Picture12@2x.png",
                "h4"=> "Penny wise, pound foolish",
                "sub" => "Daniel-Penny wise.",
                "p" =>"Being overly concerned with saving small amounts of money while neglecting larger
                        issues that could cost more in the long run. Have a balanced approach to financial decisions."
            ],
            (object)[
                "href" => "images-portfolio/folio/gallery/Picture9.png",
                "img"=> "images-portfolio/folio/Picture9@2x.png",
                "h4"=> "Don't put all your eggs in one basket",
                "sub" => "Daniel- The wise Man",
                "p" =>" Investing all your resources or efforts into one venture is not the wisest choice. Diversification reduces
                        risk and helps to protect against potential losses."
            ],
        ];
        return view('portfolio',compact('quotes'));
    }
}
