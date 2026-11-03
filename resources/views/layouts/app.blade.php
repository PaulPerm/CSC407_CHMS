<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | ChMS Lite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand bg-body-tertiary border-bottom mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('people.index') }}">Church of AI</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('people.*')) active @endif" href="{{ route('people.index') }}">People</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('events.*')) active @endif" href="{{ route('events.index') }}">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('donations.*')) active @endif" href="{{ route('donations.index') }}">Donations</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>
