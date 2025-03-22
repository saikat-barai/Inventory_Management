<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboard');