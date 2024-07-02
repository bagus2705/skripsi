<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController,
    RegisterController,
    ScriptController,
    DashboardCategoryController,
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



// Admin category routes
Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug']);
Route::resource('/dashboard/categories', DashboardCategoryController::class)->except('show')->middleware('admin');

// Script routes
Route::get('/scripts', [ScriptController::class, 'index']);
Route::get('/scripts/{script:slug}', [ScriptController::class, 'show']);

// Dashboard script routes
Route::get('/dashboard/scripts/checkSlug', [DashboardScriptController::class, 'checkSlug']);
Route::resource('/dashboard/scripts', DashboardScriptController::class)->middleware('auth');

// OCR routes
Route::post('/dashboard/scripts/performOCR', [OcrController::class, 'performOCR']);


