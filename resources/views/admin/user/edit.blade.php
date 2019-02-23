@extends('admin.public.admin')
@section('title','用户修改')

@section('content')

    <div class="container">
        <br>
        <div class="text-right">
            <a class="btn btn-success" href="{{ route('admin.user.index') }}">列表页</a>
        </div>
        <br>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">修改用户</h3>
            </div>
            <div class="panel-body">

                <form action="{{ route('admin.user.edit',['id'=>$data->id]) }}" method="post" class="form-horizontal" role="form">
                    {{--put提交--}}
                    {{ method_field('put') }}
                    {{--csrf--}}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-sm-2 control-label">用户名:</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" value="{{ $data->username }}" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">密码:</label>
                        <div class="col-sm-10">
                            <input type="text" name="password" class="form-control" value="{{ $data->password }}" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">邮箱:</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" value="{{ $data->email }}" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">修改用户</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>

    </div>

@endsection