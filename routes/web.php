<?php

use App\Http\Controllers\User\Auth\AuthController;
use App\Http\Controllers\User\Post\CommentController;
use App\Http\Controllers\User\Post\PostController;
use App\Http\Controllers\User\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Users Pages
Route::view('user/register', 'User.auth.register')->name('register');
Route::post('user/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('user/login', [AuthController::class, 'login'])->name('auth.login');
ROute::view('user/login', 'User.auth.login')->name('login');

Route::group(['middleware' => ['auth']],function () {
    Route::resource('user', UserController::class);
    Route::resource('post', PostController::class);
    Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});