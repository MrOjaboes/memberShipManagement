<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/member/adult', [App\Http\Controllers\API\CCTVSectionController::class, 'getAdults']);
Route::get('/member/children', [App\Http\Controllers\API\CCTVSectionController::class, 'getChildren']);
Route::post('/images', [App\Http\Controllers\API\CCTVSectionController::class, 'upload']);
