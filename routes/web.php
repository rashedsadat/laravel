<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Social\SocialAuthFacebookController;
use App\Http\Controllers\Social\SocialAuthGithubController;
use App\Http\Controllers\Social\SocialAuthGoogleController;
use App\Http\Controllers\VerifyOtpController;
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
    if(Auth::user()){
        return view('/home');
    }
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verify', [VerifyOtpController::class, 'showVerifyForm'])->name('verify');
Route::post('/send_verify_code', [VerifyOtpController::class, 'sendVerifyOtp'])->name('send_verify_code');
Route::post('/confirm_verification', [VerifyOtpController::class, 'confirmVerificationOtp'])->name('confirm_verification');

Route::namespace('Admin')->group(function(){

    // Route::get('/mark-read', function () {
    //     auth()->user()->unreadNotifications->markAsRead();
    //     return back();
    // })->name('mark-read')->middleware('auth:admin');

    Route::get('admin', [DashboardController::class, 'index'])->name('admin.home');
    Route::get('admin/profile', [DashboardController::class, 'showProfile'])->name('admin.profile');
    Route::get('admin/profilePicture', [DashboardController::class, 'showUploadProfilePicture'])->name('admin.profilePicture');
    Route::post('admin/upload_profile_pic', [DashboardController::class, 'uploadProfilePic'])->name('admin.upload_profile_pic');

    Route::resource('roles', 'RoleController');
    // Route::resource('users', 'UserController');
    Route::resource('permissions', 'PermissionController');
});

Route::get('/facebookRedirect', [SocialAuthFacebookController::class, 'facebookRedirect'])->name('facebookRedirect');
Route::get('/facebookCallback', [SocialAuthFacebookController::class, 'facebookCallback'])->name('facebookCallback');

Route::get('/googleRedirect', [SocialAuthGoogleController::class, 'googleRedirect'])->name('googleRedirect');
Route::get('/googleCallback', [SocialAuthGoogleController::class, 'googleCallback'])->name('googleCallback');

Route::get('/githubRedirect', [SocialAuthGithubController::class, 'githubRedirect'])->name('githubRedirect');
Route::get('/githubCallback', [SocialAuthGithubController::class, 'githubCallback'])->name('githubCallback');