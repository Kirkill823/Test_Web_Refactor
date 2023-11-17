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
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Название</th>
                <th scope="col">Вид занятости</th>
                <th scope="col">Телефон</th>
                <th scope="col">Адрес</th>
            </tr>
            </thead>
            <tbody>
            @foreach($infos as $info)
            <tr>
                <td>{{$info->name}}</td>
                <td>{{$info->employment}}</td>
                <td>{{$info->phone}}</td>
                <td>{{$info->place}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
<footer>
    @include('includes/footer')
</footer>
</html>
