<?php
namespace App\Traits;
trait Upfile
{
    public function upfile(string $upname='avatar',string $nodename='avatar')
    {
        //默认上传文件名
        $avatar = config('admin.admin.avatar_path');
        if (request()->hasFile($upname)){
            $ret = request()->file($upname)->store('',$nodename);
            //把文件上传的文件名替换掉
            $avatar = $ret;
        }
        return $avatar;
    }
}