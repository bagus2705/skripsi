<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    LoginController,
    RegisterController,
    ScriptController,
    AdminCategoryController,
    DashboardPostController,
    DashboardScriptController,
    OcrController
};

// Home and About routes
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home',
    ]);
});


// Post routes
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Authentication routes
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

// Dashboard post routes
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Admin category routes
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug']);
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

// Script routes
Route::get('/scripts', [ScriptController::class, 'index']);
Route::get('/scripts/{script:slug}', [ScriptController::class, 'show']);

// Dashboard script routes
Route::get('/dashboard/scripts/checkSlug', [DashboardScriptController::class, 'checkSlug']);
Route::resource('/dashboard/scripts', DashboardScriptController::class)->middleware('auth');

// OCR routes
Route::post('/dashboard/scripts/performOCR', [OcrController::class, 'performOCR']);


