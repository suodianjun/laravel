<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //字段黑名单
    protected $guarded = [];

    public function userExt()
    {
        return $this->hasOne(UserExt::class,'uid','id');
    }

    public function auth()
    {
        return $this->belongsToMany(auth::class,'user_auth','user_id','auth_id');
    }
}
