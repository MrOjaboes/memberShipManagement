<?php

use App\Models\ExternalEvent;
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
Route::get('/event-link', function () {
    return view('welcome',['links'=> ExternalEvent::where('status',0)->get()]);
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

//Member message collections
Route::get('/home/messages', [App\Http\Controllers\MessageController::class, 'messages'])->name('member.messages');

//Event collection
Route::get('/home/event/{event}/details', [App\Http\Controllers\EventRegistrationController::class, 'eventDetails'])->name('member.eventDetails');
Route::post('/home/event/{event}/details', [App\Http\Controllers\EventRegistrationController::class, 'attendEvent'])->name('member.attendEvent');
Route::get('/home/event/leader/{event}/details', [App\Http\Controllers\EventRegistrationController::class, 'leaderEventDetails'])->name('member.leadereventDetails');

//Admin Section
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
//Admin Profile
Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
//Event Section
Route::get('/admin/events', [App\Http\Controllers\EventController::class, 'index'])->name('admin.events');
Route::get('/admin/event', [App\Http\Controllers\EventController::class, 'event'])->name('admin.event');
Route::post('/admin/event', [App\Http\Controllers\EventController::class, 'store'])->name('admin.event');
Route::get('/admin/event/{event}/edit', [App\Http\Controllers\EventController::class, 'edit'])->name('admin.event.edit');
Route::post('/admin/event/{event}/edit', [App\Http\Controllers\EventController::class, 'updateEvent'])->name('admin.event.edit');
//External Link
Route::get('/admin/external-event', [App\Http\Controllers\EventController::class, 'externalLink'])->name('admin.event.external');
Route::post('/admin/external-event', [App\Http\Controllers\EventController::class, 'storeLink'])->name('admin.event.external');
Route::get('/admin/leaders-event', [App\Http\Controllers\EventController::class, 'leaders'])->name('admin.event.leaders');
Route::get('/admin/leaders/event', [App\Http\Controllers\EventController::class, 'leaderEvent'])->name('admin.event.leader');
Route::post('/admin/leaders/event', [App\Http\Controllers\EventController::class, 'storeLeaderEvent'])->name('admin.event.leader');
Route::get('/admin/leaders/{event}/edit', [App\Http\Controllers\EventController::class, 'editLeaderEvent'])->name('admin.event.leaderEdit');
Route::post('/admin/leaders/{event}/edit', [App\Http\Controllers\EventController::class, 'updateLeaderEvent'])->name('admin.event.leaderEdit');

//Messages Section
Route::get('/admin/message', [App\Http\Controllers\MessageController::class, 'create'])->name('admin.message');
Route::post('/admin/message', [App\Http\Controllers\MessageController::class, 'sendMessage'])->name('admin.message');
//Member(s) Collection
Route::get('/admin/members', [App\Http\Controllers\AdminController::class, 'members'])->name('admin.members');
Route::get('/admin/members/birthdate', [App\Http\Controllers\AdminController::class, 'birthdate'])->name('admin.members.birthdate');
Route::get('/admin/member/{user}/profile', [App\Http\Controllers\MemberController::class, 'member'])->name('admin.memberDetails');
Route::post('/admin/member/{user}/profile', [App\Http\Controllers\MemberController::class, 'comment'])->name('admin.member.comment');
//Attendance(s) Collection
Route::get('/admin/attendance', [App\Http\Controllers\AdminController::class, 'attendance'])->name('admin.attendance');
Route::get('/admin/attendance/{event}/members', [App\Http\Controllers\AdminController::class, 'eventAttendance'])->name('admin.attendance.member');
