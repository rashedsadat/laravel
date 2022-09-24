<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserImageFile extends Model
{
    protected $fillable = [
        'image_files_id'
    ];

    public function userType(){
        return $this->morphTo();
    }
}
