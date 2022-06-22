<?php

use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/portfolio/{id}', [ThemeController::class, 'themeOne'])
    ->where('id', '([a-z\-\_]+)')
    ->name('theme-one');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])
        ->name('profile');
    Route::get('/skills', [DashboardController::class, 'skills'])
        ->name('skills');
    Route::get('/experiences', [DashboardController::class, 'experiences'])
        ->name('experiences');
    Route::get('/projects', [DashboardController::class, 'projects'])
        ->name('projects');
    Route::get('/testimonials', [DashboardController::class, 'testimonials'])
        ->name('testimonials');
    Route::get('/contact', [DashboardController::class, 'contact'])
        ->name('contact');
});
