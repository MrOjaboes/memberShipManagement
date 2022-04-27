<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Member Section
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/profile', [App\Http\Controllers\HomeController::class, 'profileDetails'])->name('home.profile');
Route::get('/home/profile/update', [App\Http\Controllers\HomeController::class, 'editProfile'])->name('member.profile');
Route::post('/home/profile/update', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('member.profile');


//Admin Section
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
