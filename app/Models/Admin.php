<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use App\Notifications\PasswordReset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasApiTokens, Notifiable;
    
    protected $guard = 'admin';
    
    protected $fillable = [
        'name', 'email', 'password', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function adminImageFiles(){
        return $this->morphMany(UserImageFile::class, 'userType');
    }

    public function sendPasswordResetNotification($token){
        $this->notify(new PasswordReset($token));
    }
}
