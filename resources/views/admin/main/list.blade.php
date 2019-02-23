{{--继承父模板--}}
@extends('admin.public.layout')
@section('title','我是列表页')
@section('content')
    <div class="c">列表</div>
    <p>
        <a href="{{ route('admin.main.detail') }}">详情</a>
    </p>
    @endsection