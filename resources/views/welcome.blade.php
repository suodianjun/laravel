<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>你好世界</h1>
    <h1>{{ $age }}</h1>
    <h1>{{ $msg }}</h1>
    <h1><?=$msg?></h1>
    <h1>{{ $email or '没有邮箱' }}</h1>
    {{--解析html--}}
    {{--原生态输出--}}
    @{!! $title !!}
    {{--输出胡时间--}}
    <hr />
    {{ date('Y年m月d日 H:i:s') }}
    <p>
        @if($age < 10)
        <p>小学生</p>
        @elseif($age < 20)
                <p>成年</p>
                @elseif($age < 30)
                        <p>中年</p>
                        @elseif($age < 80)
                                <p>推线</p>
                        @endif
                                <ul>
                                    @for($i=0;$i<10;$i++)
                                        <li>{{ $i }}</li>
                                        @endfor
                                </ul>
    <ul>
        {{--forelse当请求数据为空时，执行enpty后面的代码--}}
        @forelse($data as $key=>$value)
            <li>{{ $key }}--{{ $value['id'] }}--{{ $value['name'] }}</li>
            @empty
            <p>暂时没有数据</p>
            @endforelse
    </ul>
    </p>
</body>
</html>