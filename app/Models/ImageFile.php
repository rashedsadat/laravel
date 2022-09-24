<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageFile extends Model
{
    public function userImageFile(){
        return $this->morphOne(UserImageFile::class, 'userType');
    }
}
