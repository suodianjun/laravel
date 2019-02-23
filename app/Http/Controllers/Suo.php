<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Suo extends Controller
{
    public function suo(Request $request){
        dump($request);
    }
    public function res(Request $request){
//        return response('你好呀我是索索')->cookie('name','你好');
//        dump($request->cookie('name'));
    }

}
