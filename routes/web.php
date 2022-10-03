<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerifyOtpController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Social\SocialAuthGithubController;
use App\Http\Controllers\Social\SocialAuthGoogleController;
use App\Http\Controllers\Social\SocialAuthFacebookController;

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
    Route::get('admin', [DashboardController::class, 'index'])->name('admin.home');
    Route::get('admin/profile', [DashboardController::class, 'showProfile'])->name('admin.profile');
    Route::get('admin/profilePicture', [DashboardController::class, 'showUploadProfilePicture'])->name('admin.profilePicture');
    Route::post('admin/upload_profile_pic', [DashboardController::class, 'uploadProfilePic'])->name('admin.upload_profile_pic');

    // Route for control admin user 
    // Route::group(['middleware' => ['can:admin-user-list']], function () {
    //     Route::get('admin_users', [AdminUserController::class, 'index'])->name('admin_users.index');
    // });

    // Route::group(['middleware' => ['can:admin-user-create']], function(){
    //     Route::get('admin_users/create', [AdminUserController::class, 'create'])->name('admin_users.create');
    //     Route::post('admin_users', [AdminUserController::class, 'store'])->name('admin_users.store');
    // });

    // Route::group(['middleware' => ['can:admin-user-edit']], function(){
    //     Route::get('admin_users/{id}/edit', [AdminUserController::class, 'edit'])->name('admin_users.edit');
    //     Route::put('admin_users/{id}', [AdminUserController::class, 'update'])->name('admin_users.update');
    // });

    // Route::group(['middleware' => ['can:admin-user-delete']], function(){
    //     Route::delete('admin_users/{id}', [AdminUserController::class, 'destroy'])->name('admin_users.destroy');
    // });

    // // Route for control Roles
    // Route::group(['middleware' => ['can:role-list']], function(){
    //     Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    // });

    // Route::group(['middleware' => ['can:role-create']], function(){
    //     Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
    //     Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
    // });

    // Route::group(['middleware' => ['can:role-edit']], function(){
    //     Route::get('roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    //     Route::put('roles/{id}', [RoleController::class, 'update'])->name('roles.update');
    // });

    // Route::group(['middleware' => ['can:role-delete']], function(){
    //     Route::delete('roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
    // });

    // // Route for control Permissions
    // Route::group(['middleware' => ['can:permission-list']], function(){
    //     Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
    // });

    // Route::group(['middleware' => ['can:permission-create']], function(){
    //     Route::get('permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
    //     Route::post('permissions', [PermissionController::class, 'store'])->name('permissions.store');
    // });

    // Route::group(['middleware' => ['can:permission-edit']], function(){
    //     Route::get('permissions/{id}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
    //     Route::put('permissions/{id}', [PermissionController::class, 'update'])->name('permissions.update');
    // });

    // Route::group(['middleware' => ['can:permission-delete']], function(){
    //     Route::delete('permissions/{id}', [PermissionController::class, 'destroy'])->name('permissions.destroy');
    // });

    Route::resource('roles', 'RoleController');
    Route::resource('admin_users', 'AdminUserController');
    Route::resource('permissions', 'PermissionController');
});

Route::get('/facebookRedirect', [SocialAuthFacebookController::class, 'facebookRedirect'])->name('facebookRedirect');
Route::get('/facebookCallback', [SocialAuthFacebookController::class, 'facebookCallback'])->name('facebookCallback');

Route::get('/googleRedirect', [SocialAuthGoogleController::class, 'googleRedirect'])->name('googleRedirect');
Route::get('/googleCallback', [SocialAuthGoogleController::class, 'googleCallback'])->name('googleCallback');

Route::get('/githubRedirect', [SocialAuthGithubController::class, 'githubRedirect'])->name('githubRedirect');
Route::get('/githubCallback', [SocialAuthGithubController::class, 'githubCallback'])->name('githubCallback');