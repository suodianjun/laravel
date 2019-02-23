<?php

namespace App\Http\Controllers\Admin;

use App\Traits\Upfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\User;
class IndexController extends Controller
{
    use Upfile;
    public function index(Request $request)
    {        if ($request->isMethod('post')){
        //使用trait封装的文件上传
        $acatar = $this->upfile();
        dd($acatar);
//            if ($request->hasFile('tu')){
//                //获取拓展名
//                $ext = $request->file('tu')->extension();
////                定义上传后保存的文件名
//                $filename = str_random(10).time().mt_rand(1000,9999).'.'.$ext;
//               $ret =  $request->file('tu')->move(config('admin.admin.avatar_path'),$filename);
//            }
//            dd($ret);
        }
//    $user = User::find(1);
//    $data = $user->auth();
//    echo $request->route()->getName();
//    dd($data->pluck('route')->toarray());
        return view('admin.index.index');
    }
}
