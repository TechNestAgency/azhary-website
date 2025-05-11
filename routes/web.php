<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Models\Room;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Room routes
    Route::post('/create-room', [IndexController::class, 'createRoom'])->name('create-room');
    Route::post('/room/{id}/delete', [IndexController::class, 'delete'])->name('room.delete');
    Route::post('/room/{id}/toggle', [IndexController::class, 'toggleStatus'])->name('room.toggle');
    Route::post('/change-password/{id}', [IndexController::class, 'changePassword'])->name('change-password');
    Route::get('/reset-all-rooms', [IndexController::class, 'resetAllRooms'])->name('reset-all-rooms');
});

require __DIR__.'/auth.php';
