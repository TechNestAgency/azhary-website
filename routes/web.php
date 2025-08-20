<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Website\IndexController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\Admin\EnrollmentController as AdminEnrollmentController;
use App\Http\Controllers\Admin\ArticleController;

// Public Website Routes
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/optimized', function () {
    return view('website.index-optimized');
})->name('home.optimized');

Route::get('/test-loading', function () {
    return view('website.test-loading');
})->name('website.test-loading');

Route::get('/debug-content', function () {
    return view('website.debug-content');
})->name('website.debug-content');

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
    Route::get('/index', [App\Http\Controllers\Website\TeacherController::class, 'index'])->name('index');
    Route::get('/{teacher}', [App\Http\Controllers\Website\TeacherController::class, 'show'])->name('show');
    Route::post('/{teacher}/reviews', [App\Http\Controllers\Website\TeacherController::class, 'storeReview'])->name('reviews.store');
    Route::post('/{teacher}/book-session', [App\Http\Controllers\Website\TeacherController::class, 'bookSession'])->name('book.session');
});

// Room Management Routes
// Route::post('change-password/{room_id}', [App\Http\Controllers\IndexController::class, 'changePassword'])->name('change-password');
// Route::post('change-all-password', [App\Http\Controllers\IndexController::class, 'changeAllPassword'])->name('change-all-password');
// Route::get('reset-all-rooms', [App\Http\Controllers\IndexController::class, 'resetAllRooms'])->name('reset-all-rooms');

Route::get('/enroll', [EnrollmentController::class, 'show'])->name('enroll.show');
Route::post('/enroll', [EnrollmentController::class, 'store'])->name('enroll.store');

// Articles Routes
Route::prefix('articles')->name('website.articles.')->group(function () {
    Route::get('/', [App\Http\Controllers\Website\ArticleController::class, 'index'])->name('index');
    Route::get('/{id}', [App\Http\Controllers\Website\ArticleController::class, 'show'])->name('show');
});

// Language Switch Route
Route::get('language/{locale}', [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('language.switch');

// Debug route to test language switching
Route::get('debug/locale', function () {
    return response()->json([
        'current_locale' => app()->getLocale(),
        'session_locale' => session()->get('locale'),
        'config_locale' => config('app.locale'),
        'fallback_locale' => config('app.fallback_locale'),
        'session_id' => session()->getId(),
        'session_data' => session()->all()
    ]);
})->name('debug.locale');

// Test route to manually set locale
Route::get('test/set-locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr'])) {
        session()->put('locale', $locale);
        app()->setLocale($locale);
        session()->save();
        
        return response()->json([
            'success' => true,
            'locale_set' => $locale,
            'session_locale' => session()->get('locale'),
            'app_locale' => app()->getLocale()
        ]);
    }
    
    return response()->json(['success' => false, 'error' => 'Invalid locale']);
})->name('test.set-locale');

// Add this line after the existing routes
// Route::get('/packages', [App\Http\Controllers\Website\PackageController::class, 'index'])->name('website.packages.index');

// Rates Routes (Madrassat Elkarim Style)
Route::prefix('rates')->name('rates.')->group(function () {
    Route::get('/confirmed', function () {
        return view('website.rates.confirmed');
    })->name('confirmed');
    
    Route::get('/super', function () {
        return view('website.rates.super');
    })->name('super');
    
    Route::get('/ambassador', function () {
        return view('website.rates.ambassador');
    })->name('ambassador');
});

Route::get('/pricing', function () {
    return view('website.pricing');
})->name('pricing');

// Course Routes
Route::prefix('courses')->name('website.courses.')->group(function () {
    Route::get('/quran', function () {
        return view('website.courses.quran');
    })->name('quran');

    Route::get('/arabic-language', function () {
        return view('website.courses.arabic-language');
    })->name('arabic-language');

    Route::get('/islamic-studies', function () {
        return view('website.courses.islamic-studies');
    })->name('islamic-studies');

    Route::get('/ijazah', function () {
        return view('website.courses.ijazah');
    })->name('ijazah');
});
