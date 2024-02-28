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

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/who-am-i', function () {
    return view('whoami');
})->name('whoami');

Route::get('/about-dixie', function () {
    return view('about');
})->name('about');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
