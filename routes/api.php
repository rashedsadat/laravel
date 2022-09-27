<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\VerifyOtpController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Admin\DashboardController;

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

Route::namespace('Api')->group(function(){

    Route::namespace('Auth')->group(function(){
        // Route to register user
        Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register-user', [RegisterController::class, 'register']);

        // Route to login user
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login-user', [LoginController::class, 'login']);
    });
    
    // Route to varify user and admin
    Route::post('/send_verify_code/{id}', [VerifyOtpController::class, 'sendVerifyOtp']);
    Route::post('/confirm_verification/{id}', [VerifyOtpController::class, 'confirmVerificationOtp']);

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::namespace('Admin')->group(function(){

        Route::get('admin', [DashboardController::class, 'index'])->name('admin.home');
        Route::get('admin/profile', [DashboardController::class, 'showProfile'])->name('admin.profile');
        Route::get('admin/profilePicture', [DashboardController::class, 'showUploadProfilePicture'])->name('admin.profilePicture');
        Route::post('admin/upload_profile_pic', [DashboardController::class, 'uploadProfilePic'])->name('admin.upload_profile_pic');
    
    });
});
