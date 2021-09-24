<?php

use Illuminate\Support\Facades\Route;
use Admin\UserController;
use User\Profile;

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
    return view('index');
});

//user related profile pages
Route::prefix('user')->middleware(['auth', 'verified'])->name('user.')->group(function () {
    Route::get('profile', Profile::class)->name('profile');
});

//Admin Routes
//middleware and auth checks if the user is logged in or not n redirects ...
Route::prefix('admin')->middleware(['auth', 'auth.isAdmin', 'verified'])->name('admin.')->group(function () {
    Route::resource('/users', UserController::class);
});