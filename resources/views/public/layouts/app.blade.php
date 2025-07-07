<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Fondation PHM</title>
    <meta name="description" content="@yield('description')">
    
    @vite(['resources/css/style.css', 'resources/js/public_app.js'])
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    @yield('head')
</head>
<body>
    @include('public.layouts.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('public.layouts.footer')

    @yield('scripts')
</body>
</html>