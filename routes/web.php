<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class,'showWelcome']);

Route::get('/signup', [HomeController::class,'showSignup'])->name('signup');

Route::get('/signin', [HomeController::class,'showSignin']);

Route::get('/service', [HomeController::class,'showService']);

Route::get('/profile', [HomeController::class,'showProfile']);

Route::get('/company', [HomeController::class,'showCompany']);

Route::get('/collaboration', [HomeController::class,'showCollaboration']);

Route::post('/signup', [UserController::class,'insert']);
Auth::routes();

Route::get('/reg',[HomeController::class,'register']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
