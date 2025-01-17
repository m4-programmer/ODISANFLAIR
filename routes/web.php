<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::middleware("traffic")->group(function (){
    //Admin Routes
    Route::prefix('admin')->middleware("auth")->name('admin.')->group(base_path('routes/admin.php'));

    Route::get('/index', [WelcomeController::class,'index'])->name('blog_index');
    Route::get('/', [WelcomeController::class,'portfolio']);
    Route::get('/search', [WelcomeController::class,'search'])->name('search');
    Route::get('/category/latest',[CategoryController::class,'latest'])->name('latest');
    Route::get('/category/popular',[CategoryController::class,'popular'])->name('popular');
    Route::get('/category/{title}', [CategoryController::class,'index'])->name('category');
//    Route::get("/videos", GetVideosController::class)->name("videos");
//    Route::get("/videos/{title}", ViewVideoController::class)->name("view_video");
    Route::post('/newsletter',[App\Http\Controllers\Controller::class,'subscribe']);
    Route::view('/contact',"contact");
    Route::post('/contact',[WelcomeController::class, "contact"]);
    Route::view('/about', 'about');
    Route::view('/privacy-policy', 'privacy');

    Route::view('/disclaimer', 'disclaimer')->name('disclaimer');
    Route::view('/scam-alert', 'scam_alert')->name('scam_alert');
    Route::view('/starter', 'starter');

    Auth::routes([
        'register' => false, // Disable registration routes
        'reset' => false,    // Disable password reset routes
        'verify' => false,   // Disable email verification routes
    ]);

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/library', [WelcomeController::class, 'library'])->name('library');
    Route::get('/library/tags/{librarySlug}', [WelcomeController::class, 'getLibraryCategoryData'])->name('library_more');
    Route::get('/{category}', [CategoryController::class,'dynamicContent'])->name('category_card');
    Route::get('/{category}/{post_slug}', [PostController::class,'index']);
    Route::post('/{category}/{post_slug}', [PostController::class,'store']);
});


