<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Main page route
Route::get('/', [HomeController::class, 'index'])->name('home');

// API route for countdown timer
Route::get('/api/countdown', [HomeController::class, 'getCountdown'])->name('api.countdown');

// Additional routes jika diperlukan
Route::group(['prefix' => 'admin'], function () {
    // Admin routes bisa ditambah di sini nanti
});

// Route untuk handle form submissions jika ada
Route::post('/contact', [HomeController::class, 'contact'])->name('contact.submit');
Route::post('/apply-job', [HomeController::class, 'applyJob'])->name('job.apply');