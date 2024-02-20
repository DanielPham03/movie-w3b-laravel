<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Movie W3b')</title>

    @include('web.components.head')
</head>

<body>
    @include('web.components.header')

    <main>
        @yield('content')
    </main>
    
    @include('web.components.footer')
    
</body>

</html>