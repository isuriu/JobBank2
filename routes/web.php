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

Route::get('/post-resume', function () {
    return view('post_resume');
});

Route::get('/find-job', function () {
    return view('find_job');
});

Route::get('/post-job', function () {
    return view('post_job');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/myjobs', function () {
    return view('applied_jobs');
});

Route::get('/find', function () {
    return view('find_jobs');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['verified'])->name('dashboard');

require __DIR__.'/auth.php';
