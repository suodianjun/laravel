{{--继承父模板--}}
@extends('admin.public.layout')
@section('title','详情页')
@section('content')
    <div class="c">详情页</div>
    <p>
        <a href="{{ route('admin.main.index').'/12' }}">返回首页</a>
    </p>
    @endsection