<?php

namespace App\Http\Controllers\Admin;

use App\models\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function test(Request $request)
    {
//        $ret = Test::insert([
//            'username'=>str_random(10),
//            'password'=>bcrypt('admin'),
//            'sex'=>'女士'
//        ]);
//        $model = new Test();
//        $model->username = str_random(10);
//        $model->password = bcrypt('amdin');
//        $ret  = $model->save();
//        $ret = Test::create([
//        'username'=>str_random(10),
//        'password'=>bcrypt('admin'),
//        'sex'=>'女士'
//    ]);
//        $model = Test::query()->find(15);
//        $ret = $model->update(['username'=>'我是update']);
//        $ret = Test::get()->where('id',1);
        //删除后返回受影响行数
//        $ret = Test::onlyTrashed()->get()->toarray()[0];
//        dd($ret);
        //保存session
//        $ret = Test::all()->toArray();
//        session(['user'=>$ret]);
//        session(['user1'=>$ret]);
//        session()->forget('user');
//        session()->forget('user');
//        session()->flush();
//        session()->flash('mag','我玩');
//        dd(session()->all());
//        \Cache::forever('qq','wqwq');
//        $ret = \Cache::get('q1q',100);
//        \Cache::flush('qq');
//        dd(\Cache::has('qq'));
        $value = \Cache::remember('user1',10,function (){
            echo 1111;
            return Test::query()->find(15)->toArray();
        });
        dump($value);
        $res = \Cache::pull('user1');
        dump(cache('user1'));
        dd($res);
        return redirect(route('admin.index.index'));
    }
}
