<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function welcome(Request $request){
        $msg = "索索";
        $age = "18";
        $email = "752636060@qq.com";
        $title = "<a href='http://www.baidu.com'>去百度</a>";
        $age = $request->get('age','1');
//        $data = [
//          ['id'=>1,'name'=>'索索'],
//          ['id'=>2,'name'=>'哈哈'],
//          ['id'=>3,'name'=>'嗯嗯']
//        ];
        $data = [];
//        return view('welcome',[
//            'msg'=>$msg,
//            'age'=>$age
//        ]);
        echo $age1 ?? '没有';
        return view('welcome',compact('msg','age','email','title','data'));
    }
}
