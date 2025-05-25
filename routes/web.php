<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Website\TeacherController as WebsiteTeacherController;
use App\Http\Controllers\Website\IndexController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\Admin\EnrollmentController as AdminEnrollmentController;
use App\Http\Controllers\Admin\ArticleController;

// Public Website Routes
Route::get('/', [IndexController::class, 'index'])->name('home');

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
});

// Admin Protected Routes
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminIndexController::class, 'index'])->name('dashboard');
    Route::resource('teachers', TeacherController::class);
    Route::resource('enrollments', AdminEnrollmentController::class);
    Route::resource('articles', ArticleController::class);
});

// Public Teacher Routes
Route::prefix('teachers')->name('website.teachers.')->group(function () {
    Route::get('/', [WebsiteTeacherController::class, 'index'])->name('index');
    Route::get('/{teacher}', [WebsiteTeacherController::class, 'show'])->name('show');
    Route::post('/{teacher}/reviews', [WebsiteTeacherController::class, 'storeReview'])->name('reviews.store');
    Route::post('/{teacher}/book-session', [WebsiteTeacherController::class, 'bookSession'])->name('book.session');
});

// Room Management Routes
Route::post('change-password/{room_id}', [\App\Http\Controllers\IndexController::class, 'changePassword'])->name('change-password');
Route::post('change-all-password', [\App\Http\Controllers\IndexController::class, 'changeAllPassword'])->name('change-all-password');
Route::get('reset-all-rooms', [\App\Http\Controllers\IndexController::class, 'resetAllRooms'])->name('reset-all-rooms');

Route::get('/enroll', [EnrollmentController::class, 'show'])->name('enroll.show');
Route::post('/enroll', [EnrollmentController::class, 'store'])->name('enroll.store');

// Articles Routes
Route::prefix('articles')->name('website.articles.')->group(function () {
    Route::get('/', [App\Http\Controllers\Website\ArticleController::class, 'index'])->name('index');
    Route::get('/{id}', [App\Http\Controllers\Website\ArticleController::class, 'show'])->name('show');
});

// Language Switch Route
Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr'])) {
        session()->put('locale', $locale);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('language.switch');
