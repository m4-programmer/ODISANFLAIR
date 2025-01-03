<?php
use App\Http\Controllers\Admin\ManageCategories;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LibraryTagsController;
use App\Http\Controllers\ManageAudiosController;
use App\Http\Controllers\ManageCommentController;
use App\Http\Controllers\ManagePostController;
use App\Http\Controllers\ManageVideosController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->withoutMiddleware('traffic');
Route::resource('/categories', ManageCategories::class);
Route::resource('/library_tags', LibraryTagsController::class);
Route::resource('/posts', ManagePostController::class);
Route::resource('/videos', ManageVideosController::class);
Route::resource('/audios', ManageAudiosController::class);
Route::resource('/comments', ManageCommentController::class);
