<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>@yield('title', 'Document')</title>
</head>
<body>
    <div class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('layouts.navbar.navbar')
            @include('partials.session-status')
        </header>

        <main>
            @yield('content')
        </main>
        
        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{config('app.name')}} | Copyright @ {{date('Y')}}
        </footer>
    </div>
    
</body>
</head>