<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>{{$title ?? 'Colorfull animals'}}</title>
</head>
<body>
@include('colors.nav')
@include('colors.msg')
    <h2>{{$title}}</h2>
    <main>
        @yield('content')
    </main>
</body>
</html>
