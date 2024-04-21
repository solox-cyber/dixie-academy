<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class)->name('home');

Route::get('/who-am-i', function () {
    return view('whoami');
})->name('whoami');

Route::get('/about-dixie/{id}', [HomeController::class,'about'])->name('about');

Route::get('/courses', [HomeController::class,'courses'])->name('courses');
Route::get('/courses/{course:id}', [HomeController::class,'courseShow'])->name('course.show');

Route::get('/resources', [HomeController::class,'resources'])->name('resources');
Route::get('/resource/{resource:id}', [HomeController::class,'resourceShow'])->name('resource.show');

Route::get('/blog', [HomeController::class,'blog'])->name('blog');
Route::get('/posts/{post:slug}', [HomeController::class,'blogShow'])->name('blog.show');

Route::get('/no-idea-of-forex', [HomeController::class,'noforex'])->name('noideaforex');

Route::get('/want-to-be-profitable/{profitable:id}', [HomeController::class,'profitable'])->name('profitable');


Route::get('/join-as-a-class', [HomeController::class,'join'])->name('join');
Route::get('/one-on-one-training', [HomeController::class,'onetraining'])->name('training');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('welcome');
    })->name('dashboard');
});
