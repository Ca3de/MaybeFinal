<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ $pageTitle ?? 'Church Website' }}</title>
    <meta name="description" content="Welcome to our church website. Join us for worship, fellowship, and sermons.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO: Open Graph, Twitter Cards, etc. -->
    <meta property="og:title" content="{{ $pageTitle ?? 'Church Website' }}" />
    <meta property="og:description" content="Discover our sermons, events, and community." />
    <meta property="og:image" content="{{ asset('images/church-logo.png') }}" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('sermons') }}">Sermons</a></li>
                <li><a href="{{ route('calendar') }}">Calendar</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('directions') }}">Directions</a></li>
                <li><a href="{{ route('prayer.request.form') }}">Prayer Request</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Your Church Name. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

