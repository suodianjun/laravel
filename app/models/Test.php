<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    //定义表名，如果表名后面有s可以不用写
//    protected  $table = 'test';
//    protected $primaryKey = 'uid';
//是否让模型维护时间
//    public $timestamps = false;
    //不允许插入表的字段，对create生效
    protected $guarded = [];
    //允许插入的字段
//    protected $fillable = [];
}
