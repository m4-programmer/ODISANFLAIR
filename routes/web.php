<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManageCategories as ManageCategoriesAlias;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GetVideosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageAudiosController;
use App\Http\Controllers\ManageCommentController;
use App\Http\Controllers\ManagePostController;
use App\Http\Controllers\ManageVideosController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ViewVideoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::middleware("traffic")->group(function (){
    //Admin Routes
    Route::prefix('admin')->name('admin.')->group(function (){
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->withoutMiddleware('traffic');
        Route::resource('/categories', ManageCategoriesAlias::class);
        Route::resource('/posts', ManagePostController::class);
        Route::resource('/videos', ManageVideosController::class);
        Route::resource('/audios', ManageAudiosController::class);
        Route::resource('/comments', ManageCommentController::class);
    });
    Route::get('/index', [WelcomeController::class,'index'])->name('blog_index');
    Route::get('/', [WelcomeController::class,'portfolio']);
    Route::get('/search', [WelcomeController::class,'search'])->name('search');
    Route::get('/category/latest',[CategoryController::class,'latest'])->name('latest');
    Route::get('/category/popular',[CategoryController::class,'popular'])->name('popular');
    Route::get('/category/{title}', [CategoryController::class,'index'])->name('category');
//    Route::get("/videos", GetVideosController::class)->name("videos");
//    Route::get("/videos/{title}", ViewVideoController::class)->name("view_video");
    Route::get('/{category}/{post_slug}', [PostController::class,'index']);
    Route::post('/{category}/{post_slug}', [PostController::class,'store']);
    Route::post('/newsletter',[App\Http\Controllers\Controller::class,'subcribe']);
    Route::get('/contact',function (){
        return view('contact');
    });
    Route::get('/about',function (){
        return view('about');
    });
    Route::get('/privacy-policy',function (){
        return view('privacy');
    });
    Route::get('/disclaimer',function (){
        return view('disclaimer');
    })->name('disclaimer');
    Route::get('/scam-alert',function (){
        return view('scam_alert');
    })->name('scam_alert');
    Route::get('/starter',function (){
        return view('starter');
    });

    Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/library', [WelcomeController::class, 'library'])->name('library');
    Route::get('/{category}', [CategoryController::class,'dynamicContent'])->name('category_card');
});


