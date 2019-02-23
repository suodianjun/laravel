{{--继承父膜板--}}
@extends('admin.public.layout')
@section('title','首页')
@section('content')
    <div class="c">首页</div>
    <p>
        <a href="{{ route('admin.main.list') }}">详情</a>
    </p>
@endsection