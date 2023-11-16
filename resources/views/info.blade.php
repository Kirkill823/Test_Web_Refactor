<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('includes/header')
</head>
<body>
@foreach($infos as $info)
    <div>{{$info->name}}</div>
    <div>{{$info->phone}}</div>
    <div>{{$info->employment}}</div>
    <div>{{$info->place}}</div>
    <br>
@endforeach
</body>
<footer>

</footer>
</html>
