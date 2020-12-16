<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Document')</title>
<body>
    <nav>
        <ul>
            <li>
                <a href="/" target="_blank" rel="noopener noreferrer">Home</a>
            </li>
            <li>
                <a href="/about" target="_blank" rel="noopener noreferrer">About</a>
            </li>
            <li>
                <a href="/portfolio" target="_blank" rel="noopener noreferrer">Portfolio</a>
            </li>
            <li>
                <a href="/contact" target="_blank" rel="noopener noreferrer">Contact</a>
            </li>
        </ul>
    </nav>
    @yield('content')
    
</body>
</head>