<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboard');
Route::get('/category', [CategoryController::class, 'categoryPage'])->name('category');
Route::get('/userRegistration', [UserController::class, 'userRegistration'])->name('userRegistration');
Route::get('/userLogin', [UserController::class, 'userLogin'])->name('userLogin');
Route::get('/reset/password', [UserController::class, 'reset_password_page'])->name('reset.password');
Route::get('/sent/OTP', [UserController::class, 'sent_OTP'])->name('sent.OTP');
Route::get('/verify/OTP', [UserController::class, 'verify_OTP'])->name('verify.OTP');
Route::get('/user/profile', [UserController::class, 'user_profile'])->name('user.profile');

// customer route start
Route::get('/customer', [CustomerController::class, 'customerPage'])->name('customer');
// customer route end

// product route start 
Route::get('/product', [ProductController::class, 'productPage'])->name('product');
// product route end