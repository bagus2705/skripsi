<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController,
    RegisterController,
    ScriptController,
    DashboardCategoryController,
    DashboardScriptController,
    DashboardUserController,
    DashboardController,
    OcrController,
    BookmarkController,
    PasswordResetController
};

// Home routes
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

// Authentication routes
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register routes
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard routes
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Admin category routes
Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug']);
Route::resource('/dashboard/categories', DashboardCategoryController::class)->middleware('admin');

// Script routes
Route::get('/scripts', [ScriptController::class, 'index']);
Route::get('/scripts/{script:slug}', [ScriptController::class, 'show']);

// Dashboard script routes
Route::get('/dashboard/scripts/checkSlug', [DashboardScriptController::class, 'checkSlug']);
Route::group(['middleware' => ['adminOrFilologis']], function () {
    Route::resource('/dashboard/scripts', DashboardScriptController::class);
});

// OCR routes
Route::post('/dashboard/scripts/performOCR', [OcrController::class, 'performOCR']);

// Bookmark routes
Route::middleware('auth')->group(function () {
    Route::post('/scripts/{script}/bookmark', [BookmarkController::class, 'store'])->name('bookmarks.store');
    Route::delete('/scripts/{script}/bookmark', [BookmarkController::class, 'destroy'])->name('bookmarks.destroy');
    Route::get('/dashboard/bookmarks', [BookmarkController::class, 'index'])->name('bookmarks.index');
});

// Admin user routes
Route::resource('/dashboard/users', DashboardUserController::class)->middleware('admin');

//Password reset routes
Route::get('/password/reset', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [PasswordResetController::class, 'resetPassword'])->name('password.update');
