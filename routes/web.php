<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index']);
Route::get('/Admindashboard', [DashboardController::class,'index'])->name('Dashboard');

// Products
Route::get('/Products', [ProductController::class,'index'])->name('Products');
Route::get('/ProductsInsert', [ProductController::class,'insert'])->name('ProductInsert');

// Categories
Route::get('/Categories', [CategoryController::class,'index'])->name('Category');
Route::get('/CategoryInsert', [CategoryController::class,'insert'])->name('CategoryInsert');

// Users
Route::get('/Users', [UserController::class,'index'])->name('User');
Route::get('/UserInsert', [UserController::class,'insert'])->name('UserInsert');
Route::get('/Profile', [DashboardController::class,'Profile'])->name('Profile');

// Form
Route::get('/Login', [AuthenticationController::class,'Login'])->name('Login');
Route::get('/Register', [AuthenticationController::class,'Register'])->name('Register');
