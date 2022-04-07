<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AccController;
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

Auth::routes();

Route::get('/reg',[HomeController::class,'register']);

Route::get('/appointment',[AppointmentController::class,'appointment']);

Route::post('/appointment',[AppointmentController::class,'createData']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/account',[AccController::class,'account'])->name('account');

Route::get('/account/detail/{id}',[AccController::class,'detail']);

Route::get('/account/detail/edit/{id}',[AppointmentController::class,'edit']);

Route::post('/account/detail/update/{id}',[AppointmentController::class,'update']);

Route::get('/account/delete/{id}',[AccController::class,'delete']);
