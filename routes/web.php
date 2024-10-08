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
    return view('welcome', ['links' => ExternalEvent::where('status', 0)->get()]);
});
Auth::routes();
//Member Section
Route::group(['prefix' => 'home',  'middleware' => 'Member'], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profileDetails'])->name('home.profile');
    Route::post('/profile', [App\Http\Controllers\HomeController::class, 'updateChildren'])->name('home.profile.post');
    Route::get('/profile/update', [App\Http\Controllers\HomeController::class, 'editProfile'])->name('member.profile');
    Route::post('/profile/update', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('member.profile.post');
    Route::post('/profile/photo', [App\Http\Controllers\HomeController::class, 'updatePhoto'])->name('profile.photo');
    Route::post('/profile/login', [App\Http\Controllers\AccountUpdateController::class, 'updateDetails'])->name('member.account');
    Route::post('/profile/password', [App\Http\Controllers\AccountUpdateController::class, 'updatePassword'])->name('member.password');

    //Member message collections
    Route::get('/messages', [App\Http\Controllers\MessageController::class, 'messages'])->name('member.messages');
    Route::get('/message/{message}/details', [App\Http\Controllers\MessageController::class, 'messageDetails'])->name('member.message');

    //Event collection
    Route::get('/event/{event}/details', [App\Http\Controllers\EventRegistrationController::class, 'eventDetails'])->name('member.eventDetails');
    Route::post('/event/{event}/details', [App\Http\Controllers\EventRegistrationController::class, 'attendEvent'])->name('member.attendEvent');
    Route::get('/event/leader/{event}/details', [App\Http\Controllers\EventRegistrationController::class, 'leaderEventDetails'])->name('member.leadereventDetails');
});
//Admin Section
Route::group(['prefix' => 'admin',  'middleware' => 'Admin'], function () {

    //Export Section
    Route::get('/export-members', [App\Http\Controllers\SuperAdmin\ExportController::class, 'exportstate'])->name('admin.membersExcel');
    Route::get('/export-children', [App\Http\Controllers\SuperAdmin\ExportController::class, 'exportChildren'])->name('admin.childrenExcel');

    //Account Section
    Route::get('/account', [App\Http\Controllers\SuperAdmin\AccountController::class, 'addAccount'])->name('admin.account.new');

    //Content
    Route::get('/churches', [App\Http\Controllers\SuperAdmin\ContentController::class, 'church'])->name('admin.churches');
    Route::get('/class', [App\Http\Controllers\SuperAdmin\ContentController::class, 'class'])->name('admin.class');
    Route::get('/age_range', [App\Http\Controllers\SuperAdmin\ContentController::class, 'age_range'])->name('admin.age_range');
    Route::get('/fellowship-group', [App\Http\Controllers\SuperAdmin\ContentController::class, 'fellowshipGroup'])->name('admin.fellowship');
    Route::get('/friendship-centre', [App\Http\Controllers\SuperAdmin\ContentController::class, 'fellowshipCentre'])->name('admin.friendship');
    Route::get('/funcional-group', [App\Http\Controllers\SuperAdmin\ContentController::class, 'functionalGroup'])->name('admin.funcional');

    //Children
    Route::get('/children', [App\Http\Controllers\SuperAdmin\ChildrenController::class, 'index'])->name('admin.children');
    Route::get('/children/new', [App\Http\Controllers\SuperAdmin\ChildrenController::class, 'add'])->name('admin.children.add');
    Route::post('/children/new', [App\Http\Controllers\SuperAdmin\ChildrenController::class, 'store']);
    Route::get('/children/{children}/details', [App\Http\Controllers\SuperAdmin\ChildrenController::class, 'details'])->name('admin.childrenDetails');
    Route::post('/children/{children}/edit', [App\Http\Controllers\SuperAdmin\ChildrenController::class, 'update']);

    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::post('/upload-user', [App\Http\Controllers\AdminController::class, 'uploadUsers'])->name('upload.user');
    Route::get('/upload-user-form', [App\Http\Controllers\AdminController::class, 'uploadUser']);
    //Admin Profile
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/update', [App\Http\Controllers\AccountUpdateController::class, 'updateDetails'])->name('admin.account');
    Route::post('/profile/password', [App\Http\Controllers\AccountUpdateController::class, 'updatePassword'])->name('admin.password');

    //Event Section
    Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('admin.events');
    Route::get('/event', [App\Http\Controllers\EventController::class, 'event'])->name('admin.event');
    Route::post('/event', [App\Http\Controllers\EventController::class, 'store'])->name('admin.event.post');
    Route::get('/event/{event}/edit', [App\Http\Controllers\EventController::class, 'edit'])->name('admin.event.edit');
    Route::post('/event/{event}/edit', [App\Http\Controllers\EventController::class, 'updateEvent'])->name('admin.event.edit.post');
    //External Link
    Route::get('/external-event', [App\Http\Controllers\EventController::class, 'externalLink'])->name('admin.event.external');
    Route::post('/external-event', [App\Http\Controllers\EventController::class, 'storeLink'])->name('admin.event.external.post');
    Route::get('/leaders-event', [App\Http\Controllers\EventController::class, 'leaders'])->name('admin.event.leaders');
    Route::get('/leaders/event', [App\Http\Controllers\EventController::class, 'leaderEvent'])->name('admin.event.leader');
    Route::post('/leaders/event', [App\Http\Controllers\EventController::class, 'storeLeaderEvent'])->name('admin.event.leader.post');
    Route::get('/leaders/{event}/edit', [App\Http\Controllers\EventController::class, 'editLeaderEvent'])->name('admin.event.leaderEdit');
    Route::post('/leaders/{event}/edit', [App\Http\Controllers\EventController::class, 'updateLeaderEvent'])->name('admin.event.leaderEdit.post');

    //Messages Section
    Route::get('/message', [App\Http\Controllers\MessageController::class, 'create'])->name('admin.message');
    Route::post('/message', [App\Http\Controllers\MessageController::class, 'sendMessage'])->name('admin.message.post');
    //Member(s) Collection
    Route::get('/members', [App\Http\Controllers\SuperAdmin\AdultController::class, 'index'])->name('admin.members');
    Route::get('/member/new', [App\Http\Controllers\SuperAdmin\AdultController::class, 'add'])->name('admin.member.new');
    Route::post('/member/new', [App\Http\Controllers\SuperAdmin\AdultController::class, 'store']);
    Route::get('/member/{member}/details', [App\Http\Controllers\SuperAdmin\AdultController::class, 'details'])->name('admin.memberDetails');
    Route::get('/member/{member}/edit', [App\Http\Controllers\SuperAdmin\AdultController::class, 'edit'])->name('admin.member.edit');
    Route::get('/members/export', [App\Http\Controllers\AdminController::class, 'generatePDF'])->name('members.pdf');
    Route::get('/members/birthdate', [App\Http\Controllers\AdminController::class, 'birthdate'])->name('admin.members.birthdate');
    Route::get('/members/wedding', [App\Http\Controllers\AdminController::class, 'wedding'])->name('admin.members.wedding');
    //Route::get('/member/{profile}/profile', [App\Http\Controllers\MemberController::class, 'member'])->name('admin.memberDetails');
    Route::post('/member/{user}/profile', [App\Http\Controllers\MemberController::class, 'comment'])->name('admin.member.comment');
    //Attendance(s) Collection
    Route::get('/attendance', [App\Http\Controllers\AdminController::class, 'attendance'])->name('admin.attendance');
    Route::get('/attendance/leaders', [App\Http\Controllers\AdminController::class, 'leadersAttendance'])->name('admin.attendance.leaders');
    Route::get('/attendance/{event}/members', [App\Http\Controllers\AdminController::class, 'eventAttendance'])->name('admin.attendance.member');
    Route::get('/attendance/{event}/members/leaders', [App\Http\Controllers\AdminController::class, 'leadersEventAttendance'])->name('admin.attendance.leadersmember');
    Route::get('/export/{event}/pdf', [App\Http\Controllers\AttendanceController::class, 'exportPdf'])->name('admin.leadersexport');
});

//Media Section
Route::group(['prefix' => 'media',  'middleware' => 'MediaAngle'], function () {
    //Media (Home page)
    Route::get('/', [App\Http\Controllers\MediaAngle\CCTVSectionController::class, 'index'])->name('media');
    Route::get('/content', [App\Http\Controllers\MediaAngle\CCTVSectionController::class, 'cms'])->name('content');
    Route::get('/new/{image}', [App\Http\Controllers\MediaAngle\CCTVSectionController::class, 'add'])->name('media.add');

    //Relationship Section
    Route::get('/api/fetch-centres', [App\Http\Controllers\MediaAngle\CCTVSectionController::class, 'fetchCentre']);
    Route::get('/api/fetch-cities', [App\Http\Controllers\MediaAngle\CCTVSectionController::class, 'fetchCity']);
    //Adult section
    Route::post('/adult/{image}/new', [App\Http\Controllers\MediaAngle\AdultController::class, 'storeAdult'])->name('media.adult.add');
    Route::get('/adult/{adult}/details', [App\Http\Controllers\MediaAngle\AdultController::class, 'details'])->name('media.adultDetails');
    Route::get('/members', [App\Http\Controllers\MediaAngle\AdultController::class, 'allAdults'])->name('adults');


    //Children Section
    Route::post('/children/{image}/new', [App\Http\Controllers\MediaAngle\ChildrenController::class, 'storeChildren'])->name('media.children.add');
    Route::get('/children/{children}/details', [App\Http\Controllers\MediaAngle\ChildrenController::class, 'childrenDetails'])->name('media.childrenDetails');
    Route::get('/children', [App\Http\Controllers\MediaAngle\ChildrenController::class, 'allChildren'])->name('children');
    // Route::post('/media/children/{children}/edit', [App\Http\Controllers\SuperAdmin\ChildrenController::class, 'update']);

    //Profile secion
    Route::get('/profile', [App\Http\Controllers\MediaAngle\CCTVSectionController::class, 'profile'])->name('media.profile');
    Route::post('/profile/update', [App\Http\Controllers\AccountUpdateController::class, 'updateDetails'])->name('media.account');
    Route::post('/profile/password', [App\Http\Controllers\AccountUpdateController::class, 'updatePassword'])->name('media.password');
    //Import section
    Route::get('/adult/import', [App\Http\Controllers\MediaAngle\AdultController::class, 'adultImport'])->name('adult-import');
    Route::get('/children/import', [App\Http\Controllers\MediaAngle\ChildrenController::class, 'childrenImport'])->name('children-import');

    Route::post('/adult/import', [App\Http\Controllers\MediaAngle\AdultController::class, 'storeAdultImport']);
    Route::post('/children/import', [App\Http\Controllers\MediaAngle\ChildrenController::class, 'storeChildrenImport']);


    Route::post('/children/{children}/edit', [App\Http\Controllers\SuperAdmin\ChildrenController::class, 'update']);
});
