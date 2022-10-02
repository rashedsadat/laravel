<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageFile extends Model
{
    public function userImageFile(){
        return $this->morphOne(UserImageFile::class, 'userType');
    }

    public function getProfileImage(){
        if(Self::find(Auth::guard()->user()->id)){
            return Self::find(Auth::guard()->user()->id)->orderBy('id', 'desc')->first()->file_name;
        }
        else{
            return 'default_profile.png';
        }
        
    }
    
    // public function makeUpload($file)
    // {

    //         // $originalImage = Image::make($file->getRealPath());

    //         // $originalImage->orientate();
    //         // $originalImage->stream();
    //         // Storage::disk(config('app.storage_driver'))->put($path, $originalImage, 'public');
    //         // $imgUrl[] = $path;

    //         // $originalImage->resize(80, 60, function ($constraint) {
    //         //     //$constraint->aspectRatio();
    //         // });
    //         $originalImage->stream();
    //         Storage::disk(config('app.STORAGE_DRIVER'))->put($thumbnail, $originalImage, 'public');
    //         $imgUrl[] = $thumbnail;

    //         return $imgUrl;
    // }

    public function upload($file){
        $file_manager = new self();
        $file_manager->file_name = $file;
        $check = $file_manager->save();
        return $check;
    }

    public function uploadUpdate($file){
        $path = $this->makeUpload($file);
        if ($path) {
            $this->remove();

            $this->url = $path;
            $this->save();

            return $this;
        } else {
            $file_manager = new self();
            $file_manager->id = 0;
            return $file_manager;
        }
    }

    public function remove()
    {
        Storage::disk(config('app.storage_driver'))->delete($this->attributes['url']);
    }
}
