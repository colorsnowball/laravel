<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title','landmaster')</title>
        <link rel="stylesheet" href="{{mix('css/tailwind.css')}}">
    </head>
    <body class="antialiased">
        <div class="bg-red-300">Landmaster</div>

        <div class="container mx-auto">   @yield('content') </div>

    </body>
</html>
