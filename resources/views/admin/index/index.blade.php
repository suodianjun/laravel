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
<form action="{{route('admin.index.index')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    图片上传<input type="file" name="avatar">
    <br />
    <input type="submit" value="上传">
</form>
<img src="{{ captcha_src('mini') }}" id="code">
{{ captcha_img() }}
</body>
</html>
    <script>
        console.log(1);
        document.querySelector('#code').onclick = function () {
            console.log('11');
            this.src += '&vt='+ Math.random();
        }
    </script>