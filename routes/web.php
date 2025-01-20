<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SermonsController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DirectionsController;
use App\Http\Controllers\PrayerRequestController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Sermons
Route::get('/sermons', [SermonsController::class, 'index'])->name('sermons');
Route::get('/sermons/fetch-youtube', [SermonsController::class, 'fetchYouTubePlaylist']);

// Calendar
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Directions
Route::get('/directions', [DirectionsController::class, 'index'])->name('directions');

// Prayer Requests
Route::get('/prayer-request', [PrayerRequestController::class, 'showForm'])->name('prayer.request.form');
Route::post('/prayer-request', [PrayerRequestController::class, 'submit'])->name('prayer.request.submit');

