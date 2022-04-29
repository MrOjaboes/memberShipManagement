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
    return view('auth.login');
});

Auth::routes();
//Member Section
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/profile', [App\Http\Controllers\HomeController::class, 'profileDetails'])->name('home.profile');
Route::post('/home/profile', [App\Http\Controllers\HomeController::class, 'updateChildren'])->name('home.profile');
Route::get('/home/profile/update', [App\Http\Controllers\HomeController::class, 'editProfile'])->name('member.profile');
Route::post('/home/profile/update', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('member.profile');
Route::post('/home/profile/login', [App\Http\Controllers\AccountUpdateController::class, 'updateDetails'])->name('member.account');
Route::post('/home/profile/password', [App\Http\Controllers\AccountUpdateController::class, 'updatePassword'])->name('member.password');

//Event collection
Route::get('/home/event/{event}/details', [App\Http\Controllers\EventRegistrationController::class, 'eventDetails'])->name('member.eventDetails');
Route::post('/home/event/{event}/details', [App\Http\Controllers\EventRegistrationController::class, 'attendEvent'])->name('member.attendEvent');

//Admin Section
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

//Event Section
Route::get('/admin/events', [App\Http\Controllers\EventController::class, 'index'])->name('admin.events');
Route::get('/admin/event', [App\Http\Controllers\EventController::class, 'event'])->name('admin.event');
Route::post('/admin/event', [App\Http\Controllers\EventController::class, 'store'])->name('admin.event');
Route::get('/admin/event/{event}/edit', [App\Http\Controllers\EventController::class, 'edit'])->name('admin.event.edit');
Route::post('/admin/event/{event}/edit', [App\Http\Controllers\EventController::class, 'updateEvent'])->name('admin.event.edit');

//Member(s) Collection
Route::get('/admin/members', [App\Http\Controllers\AdminController::class, 'members'])->name('admin.members');
