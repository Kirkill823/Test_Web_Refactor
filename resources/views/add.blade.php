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
        <form action="{{ url('/add/complete') }} " method="post">
            @csrf
                <input type="text" name="name" id="name" placeholder='ООО "Название"'>
                <input type="text" name="phone" id="phone" placeholder='Телефон'>
                <input type="text" name="employment" id="employment" placeholder='Вид занятости'>
                <input type="text" name="place" id="place" placeholder='Местоположение'>
            <button type="submit">Создать</button>
        </form>
    </div>
</body>
<footer>
    @include('includes/footer')
</footer>
</html>
