<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ApartmentController as AdminApartmentController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\StatisticController as AdminStatisticController;
use App\Http\Controllers\Admin\ReviewController as AdminReviewController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/dashboard',[AdminDashboardController::class,'showDashboard'])->name('dashboard');
    Route::resource('owners',AdminProfileController::class);
    Route::get('/apartments/trashed',[AdminApartmentController::class,'trashed'])->name('apartments.trashed');
    Route::get('/apartments/deleted/{id}/restore',[AdminApartmentController::class,'restore'])->name('apartments.restored');
    Route::delete('/apartments/forceDelete/{id}/forceDelete',[AdminApartmentController::class,'forceDelete'])->name('apartments.forceDelete');
    Route::resource('apartments',AdminApartmentController::class);
    Route::get('/statistics',[AdminStatisticController::class,'index'])->name('statistics');
    Route::get('/messages',[AdminMessageController::class,'index'])->name('messages');
    Route::get('/reviews/{id}',[AdminReviewController::class,'reviewForHome'])->name('reviews');
});