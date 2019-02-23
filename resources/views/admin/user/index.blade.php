@extends('admin.public.admin')
@section('title','用户列表')

@section('content')

    <div class="container">
        <br>
        <div class="text-right">
            <a href="{{ route('admin.user.add') }}" class="btn btn-success">添加用户</a>
        </div>
        <br>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>用户名</th>
                <th>邮箱</th>
                <th>操作</th>
            </tr>
            @forelse($data as $key=>$item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->username}}</td>
                    <td>{{ $item->email}}</td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.user.edit',$item->id)}}">修改</a>
                        <a class="btn btn-xs btn-danger user_del" href="{{ route('admin.user.delete',$item->id) }}">删除</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">暂无数据</td>
                </tr>
                @endforelse
        </table>
        <div class="pagination">
            {{--解析html--}}
            {!! $pagehtml !!}
        </div>

    </div>
@endsection

@section('js')

    <script>
        $('.user_del').click(function () {
            var what = this;
            // 获取删除地址
            var href = $(this).prop('href');
            // alert(href);
            //发送ajax请求
            $.ajax({
                url:href,
                data:{
                  _token:"{{ csrf_token() }}"
                },
                type:'delete',
                success:function (res) {
                    // alert(res.status);
                    if (!res.status){
                        $(what).parents('tr').remove();
                    }
                }
            });
            //取消a标签默认提交
            return false;
        })
    </script>
@endsection