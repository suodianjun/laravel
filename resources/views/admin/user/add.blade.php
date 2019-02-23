@extends('admin.public.admin')
@section('title','用户添加')

@section('content')

    <div class="container">
        <br>
        <div class="text-right">
            <a class="btn btn-success" href="{{ route('admin.user.index') }}">列表页</a>
        </div>
        <br>
        {{--如果错误的数量大于0，遍历出错误--}}
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ $error }}</strong>
        </div>
            @endforeach
        @endif

        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">添加用户</h3>
            </div>
            <div class="panel-body">

                <form action="{{ route('admin.user.add') }}" method="post" class="form-horizontal" role="form">
                    {{--csrf--}}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-sm-2 control-label">用户名:</label>
                        <div class="col-sm-4">
                            {{--old保留已经输入过得值--}}
                            <input type="text" name="username" class="form-control" value="{{ old('username') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">密码:</label>
                        <div class="col-sm-4">
                            <input type="text" name="password" class="form-control" value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">重复输入密码:</label>
                        <div class="col-sm-4">
                            <input type="text" name="password_confirmation" class="form-control" value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">邮箱:</label>
                        <div class="col-sm-4">
                            <input type="text" name="email" class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">添加用户</button>
                        </div>
                    </div>
                </form>



            </div>
        </div>

    </div>

@endsection