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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('Member');
Route::get('/home/profile', [App\Http\Controllers\HomeController::class, 'profileDetails'])->name('home.profile')->middleware('Member');
Route::post('/home/profile', [App\Http\Controllers\HomeController::class, 'updateChildren'])->name('home.profile')->middleware('Member');
Route::get('/home/profile/update', [App\Http\Controllers\HomeController::class, 'editProfile'])->name('member.profile')->middleware('Member');
Route::post('/home/profile/update', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('member.profile')->middleware('Member');
Route::post('/home/profile/photo', [App\Http\Controllers\HomeController::class, 'updatePhoto'])->name('profile.photo')->middleware('Member');
Route::post('/home/profile/login', [App\Http\Controllers\AccountUpdateController::class, 'updateDetails'])->name('member.account')->middleware('Member');
Route::post('/home/profile/password', [App\Http\Controllers\AccountUpdateController::class, 'updatePassword'])->name('member.password')->middleware('Member');

//Member message collections
Route::get('/home/messages', [App\Http\Controllers\MessageController::class, 'messages'])->name('member.messages')->middleware('Member');
Route::get('/home/message/{message}/details', [App\Http\Controllers\MessageController::class, 'messageDetails'])->name('member.message')->middleware('Member');

//Event collection
Route::get('/home/event/{event}/details', [App\Http\Controllers\EventRegistrationController::class, 'eventDetails'])->name('member.eventDetails')->middleware('Member');
Route::post('/home/event/{event}/details', [App\Http\Controllers\EventRegistrationController::class, 'attendEvent'])->name('member.attendEvent')->middleware('Member');
Route::get('/home/event/leader/{event}/details', [App\Http\Controllers\EventRegistrationController::class, 'leaderEventDetails'])->name('member.leadereventDetails')->middleware('Member');

//Admin Section
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('Admin');
//Admin Profile
Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile')->middleware('Admin');
//Event Section
Route::get('/admin/events', [App\Http\Controllers\EventController::class, 'index'])->name('admin.events')->middleware('Admin');
Route::get('/admin/event', [App\Http\Controllers\EventController::class, 'event'])->name('admin.event')->middleware('Admin');
Route::post('/admin/event', [App\Http\Controllers\EventController::class, 'store'])->name('admin.event')->middleware('Admin');
Route::get('/admin/event/{event}/edit', [App\Http\Controllers\EventController::class, 'edit'])->name('admin.event.edit')->middleware('Admin');
Route::post('/admin/event/{event}/edit', [App\Http\Controllers\EventController::class, 'updateEvent'])->name('admin.event.edit')->middleware('Admin');
//External Link
Route::get('/admin/external-event', [App\Http\Controllers\EventController::class, 'externalLink'])->name('admin.event.external')->middleware('Admin');
Route::post('/admin/external-event', [App\Http\Controllers\EventController::class, 'storeLink'])->name('admin.event.external')->middleware('Admin');
Route::get('/admin/leaders-event', [App\Http\Controllers\EventController::class, 'leaders'])->name('admin.event.leaders')->middleware('Admin');
Route::get('/admin/leaders/event', [App\Http\Controllers\EventController::class, 'leaderEvent'])->name('admin.event.leader')->middleware('Admin');
Route::post('/admin/leaders/event', [App\Http\Controllers\EventController::class, 'storeLeaderEvent'])->name('admin.event.leader')->middleware('Admin');
Route::get('/admin/leaders/{event}/edit', [App\Http\Controllers\EventController::class, 'editLeaderEvent'])->name('admin.event.leaderEdit')->middleware('Admin');
Route::post('/admin/leaders/{event}/edit', [App\Http\Controllers\EventController::class, 'updateLeaderEvent'])->name('admin.event.leaderEdit')->middleware('Admin');

//Messages Section
Route::get('/admin/message', [App\Http\Controllers\MessageController::class, 'create'])->name('admin.message')->middleware('Admin');
Route::post('/admin/message', [App\Http\Controllers\MessageController::class, 'sendMessage'])->name('admin.message')->middleware('Admin');
//Member(s) Collection
Route::get('/admin/members', [App\Http\Controllers\AdminController::class, 'members'])->name('admin.members')->middleware('Admin');
Route::get('/admin/members/export', [App\Http\Controllers\AdminController::class, 'generatePDF'])->name('members.pdf')->middleware('Admin');
Route::get('/admin/members/birthdate', [App\Http\Controllers\AdminController::class, 'birthdate'])->name('admin.members.birthdate')->middleware('Admin');
Route::get('/admin/members/wedding', [App\Http\Controllers\AdminController::class, 'wedding'])->name('admin.members.wedding')->middleware('Admin');
Route::get('/admin/member/{profile}/profile', [App\Http\Controllers\MemberController::class, 'member'])->name('admin.memberDetails')->middleware('Admin');
Route::post('/admin/member/{user}/profile', [App\Http\Controllers\MemberController::class, 'comment'])->name('admin.member.comment')->middleware('Admin');
//Attendance(s) Collection
Route::get('/admin/attendance', [App\Http\Controllers\AdminController::class, 'attendance'])->name('admin.attendance')->middleware('Admin');
Route::get('/admin/attendance/leaders', [App\Http\Controllers\AdminController::class, 'leadersAttendance'])->name('admin.attendance.leaders')->middleware('Admin');
Route::get('/admin/attendance/{event}/members', [App\Http\Controllers\AdminController::class, 'eventAttendance'])->name('admin.attendance.member')->middleware('Admin');
Route::get('/admin/attendance/{event}/members/leaders', [App\Http\Controllers\AdminController::class, 'leadersEventAttendance'])->name('admin.attendance.leadersmember')->middleware('Admin');
Route::get('/admin/export/{event}/pdf', [App\Http\Controllers\AttendanceController::class, 'exportPdf'])->name('admin.leadersexport')->middleware('Admin');
