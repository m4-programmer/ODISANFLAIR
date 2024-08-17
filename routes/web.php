<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManageCategories as ManageCategoriesAlias;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManageCommentController;
use App\Http\Controllers\ManagePostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

//Admin Routes
Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('/categories', ManageCategoriesAlias::class);
    Route::resource('/posts', ManagePostController::class);
    Route::resource('/comments', ManageCommentController::class);
});
Route::get('/index', [WelcomeController::class,'index'])->name('blog_index');
Route::get('/', [WelcomeController::class,'portfolio']);
Route::get('/search', [WelcomeController::class,'search'])->name('search');
Route::get('/category/latest',[CategoryController::class,'latest'])->name('latest');
Route::get('/category/popular',[CategoryController::class,'popular'])->name('popular');
Route::get('/category/{title}', [CategoryController::class,'index'])->name('category');
Route::get('/{category}/{post_slug}', [PostController::class,'index']);
Route::post('/{category}/{post_slug}', [PostController::class,'store']);
Route::post('/newsletter',[App\Http\Controllers\Controller::class,'subcribe']);
Route::get('/contact',function (){
    return view('contact');
});
Route::get('/about',function (){
    return view('about');
});
Route::get('/starter',function (){
    return view('starter');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




