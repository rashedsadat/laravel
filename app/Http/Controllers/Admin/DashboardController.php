<?php

namespace App\Http\Controllers\Admin;

use App\Models\ImageFile;
use App\Traits\FileUploadable;
use App\Http\Requests\UploadImage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    use FileUploadable;

    public function __construct(){
        $this->middleware('auth:admin');
        $this->middleware('TwoFa');
    }

    public function index(){
        $users = new User();
        $users = $users->paginate(2);

        $image = new ImageFile();
        $image_file = $image->getProfileImage();

        $folder = USER_AVATAR.'/thumbnail';
        $path = $this->find_path($image_file, $folder);
        session(['path' => $path]);

        return view('admin.home', compact('users'));
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
    }
    
}
