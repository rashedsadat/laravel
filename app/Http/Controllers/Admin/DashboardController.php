<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\ImageFile;
use Illuminate\Http\Request;
use App\Traits\FileUploadable;
use App\Http\Requests\UploadImage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    use FileUploadable;

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('TwoFa');
    }

    public function index(){
        $image = new ImageFile();
        $image_file = $image->find(session('user')->id)->orderBy('id', 'desc')->first();
        $folder = USER_AVATAR.'/thumbnail';
        $path = $this->find_path($image_file->file_name, $folder);
        session(['path' => $path]);
        return view('admin.home');
    }

    public function showProfile(){
        return view('admin.profile');
    }

    public function showUploadProfilePicture(){
        return view('admin.uploadImage');
    }

    public function uploadProfilePic(UploadImage $request){
        if($request->file('avatar')){
            $avatar = $this->upload_file($request->file('avatar'), USER_AVATAR, $request->name);
            if($avatar){
                $imageFile = new ImageFile();
                $upload = $imageFile->upload($avatar);
                if($upload){
                    // $file_name = ['file_name' => $avatar ];
                    $image = DB::table('image_files')->where('file_name', $avatar)->first();
                    $user_id = Auth::user()->id;
                    $user = Admin::find($user_id);
                    $user->adminImageFiles()->create(
                        ['image_files_id' => $image->id]
                    );
                    return redirect()->route('admin.home');
                }
            }
        }
        return back();
        // $files = $request->file('avatar');
        // $to = USER_AVATAR;
        // $imageFile = new ImageFile();
        // $imageFile->upload($to, $files);
    }
    
}
