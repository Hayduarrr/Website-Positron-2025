<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk halaman grup
Route::get('/group', [MemberController::class, 'group'])->name('group');
