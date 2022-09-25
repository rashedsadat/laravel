<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait FileUploadable
{
    /**
     * Upload file method
     * @params UploadFile $file
     * @params $folder
     * @params $file_name
     * @params $disk
     * @return $fileNameToStore
     */
    public function upload_file(UploadedFile $file, $folder = null, $file_name = null, $disk = 'public'){
        if(!Storage::directories($disk.'/'.$folder)){
            Storage::makeDirectory($disk.'/'.$folder, 0777, true);
        }

        if(!Storage::directories($disk.'/'.$folder.'/original')){
            Storage::makeDirectory($disk.'/'.$folder.'/original', 0777, true);
        }

        if(!Storage::directories($disk.'/'.$folder.'/thumbnail')){
            Storage::makeDirectory($disk.'/'.$folder.'/thumbnail', 0777, true);
        }

        $originalPath = $folder.'/original';
        $thumbnailPath = $folder.'/thumbnail';

        $fileNameWithExtension = $file->getClientOriginalName();
        //give the file name without extension
        $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileNameToStore = !is_null($fileName) ? $fileName.'.'.$extension : $fileName.uniqid().'.'.$extension;

        $file->storeAs($originalPath, $fileNameToStore, $disk);
        $file->storeAs($thumbnailPath, $fileNameToStore, $disk);
        
        return $fileNameToStore;
    }

    public function find_path($file_name, $folder){
        if(Storage::exists('public/'.$folder.'/'.$file_name)){
            return '/storage/'.$folder.'/'.$file_name;
        }
    }

    public function delete_file($file_name, $folder, $disk = 'public'){
        if(Storage::exists($disk.'/'.$folder.$file_name)){
            Storage::disk($disk)->delete($folder, $file_name);
            return true;
        }
        return false;
    }
}