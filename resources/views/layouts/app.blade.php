<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Подключение стилей --}}
    <link rel="stylesheet" href="{{ asset('/public/css/app.css') }}">

    {{-- Подключение шрифтов --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>

    
    @yield('content')
    
    {{-- Подключение скрипта --}}
    <script src="{{ asset('/public/js/app.js') }}"></script>
</body>
</html>