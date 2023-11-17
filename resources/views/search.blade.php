<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Поиск</title>
    @include('includes/header')
</head>
<body>
    <div id="itemName">
        <form action="{{ url('/search/explore') }} " method="post">
            @csrf
            <input type="text" name="explore" id="explore" placeholder='ООО "Название"'>
            <button type="submit">Поиск</button>
        </form>
    </div>
</body>
<footer>
    @include('includes/footer')
</footer>
</html>
