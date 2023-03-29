<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// return the register view
Route::get('/register', function () {
    return view('register');
});

// return the login view
Route::get('/login', function () {
    return view('login');
});

// return the browse-job view
Route::get('/browse-job', function () {
    return view('browse-job');
});

// return the characters view
Route::get('/characters', function () {
    return view('characters');
});

// return the companies view
Route::get('/companies', function () {
    return view('companies');
});

// return the company-detail view
Route::get('/company-detail', function () {
    return view('company-detail');
});

// return the resume view
Route::get('/resume', function () {
    return view('resume');
});
