<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
    @include('includes/header')
</head>
<body>
    <h1>Результаты поиска:</h1>
    <ul>
        <td>{{$data->name}}</td>
        <td>{{$data->employment}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->place}}</td>
    </ul>
</body>
<footer>
    @include('includes/footer')
</footer>
</html>
