<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadImage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('TwoFa');
    }

    public function index(){
        return view('admin.home');
    }

    public function showProfile(){
        return view('admin.profile');
    }

    public function showUploadProfilePicture(){
        return view('admin.uploadImage');
    }

    public function uploadProfilePic(UploadImage $request){
        $files = $request->file('avatar');
        $extension = $files->extension();
    }
}
