<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', function () {
    return view('auth.signup');
});

Route::get('/signin', function () {
    return view('auth.signin');
});

Route::get('/service', function () {
    return view('v_service');
});

Route::get('/profile', function () {
    return view('v_profile');
});

Route::get('/company', function () {
    return view('v_company');
});

Route::get('/collaboration', function () {
    return view('v_collaboration');
});