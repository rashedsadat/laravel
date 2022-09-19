<?php

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

// Route::post('/confirm_verification', function(){
//     dd('something');
// })->name('confirm_verification');

Route::namespace('Admin')->group(function(){

    // Route::get('/mark-read', function () {
    //     auth()->user()->unreadNotifications->markAsRead();
    //     return back();
    // })->name('mark-read')->middleware('auth:admin');

    Route::get('admin', 'DashboardController@index')->name('admin.home');

    // Route::resource('roles', 'RoleController');
    // Route::resource('users', 'UserController');
    // Route::resource('permissions', 'PermissionController');
});
