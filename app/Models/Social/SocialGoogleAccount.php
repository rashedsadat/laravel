<?php

namespace App\Models\Social;

use App\User;
use Illuminate\Database\Eloquent\Model;

class SocialGoogleAccount extends Model
{
    protected $fillable = ['user_id', 'provider_user_id', 'provider'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
