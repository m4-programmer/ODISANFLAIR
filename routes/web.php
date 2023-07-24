<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class,'index']);
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
