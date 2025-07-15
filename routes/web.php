<?php

use App\Http\Controllers\AmenityController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('amenities', AmenityController::class);
    Route::resource('locations', LocationController::class);
});

Route::get('auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);

Route::get('/change-language', function (Illuminate\Http\Request $request) {
    session(['locale' => $request->input('locale', config('app.locale'))]);
    return redirect()->back();
})->name('change-language');

require __DIR__ . '/auth.php';
