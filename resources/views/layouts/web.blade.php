<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Movie W3b')</title>

    @include('web.components.head')
</head>

<body>
    @include('web.components.header')

    <main style="margin-top: 60px">
        @yield('content')
    </main>
    
    @include('web.components.footer')
    @yield('additional-scripts')
</body>

</html>