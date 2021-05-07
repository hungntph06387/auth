<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/home', [ProductController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/checkLogin', [LoginController::class, 'authenticate'])->name('check');

Route::get('/newProduct', [ProductController::class, 'create'])->name('create');

Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('loginCheck');
