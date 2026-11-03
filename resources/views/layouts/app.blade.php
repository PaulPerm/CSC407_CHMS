<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | ChMS Lite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --charcoal: #21232E;
            --royal: #105BFF;
            --tangerine: #FE8500;

            --bs-primary: var(--royal);
            --bs-primary-rgb: 16, 91, 255;
            --bs-link-color: var(--royal);
            --bs-link-color-rgb: 16, 91, 255;
            --bs-link-hover-color: #0b4ad6;
            --bs-link-hover-color-rgb: 11, 74, 214;
            --bs-body-color: var(--charcoal);
        }

        .navbar-chms {
            background-color: var(--charcoal);
            border-bottom: 3px solid var(--tangerine);
        }
        .navbar-chms .navbar-brand { font-weight: 600; }
        .navbar-chms .nav-link.active {
            color: #fff;
            box-shadow: inset 0 -2px 0 var(--tangerine);
        }

        .panel-chms {
            background-color: #F3F6FF;
            border: 1px solid #DCE5FF;

        }

        h1, h2 { color: var(--charcoal); }
        h1 {
            padding-bottom: .5rem;
            border-bottom: 2px solid var(--tangerine);
            display: inline-block;
            margin-bottom: 1rem;
        }

        .table thead th {
            background-color: var(--charcoal);
            color: #fff;
        }

        .btn-primary {
            --bs-btn-bg: var(--royal);
            --bs-btn-border-color: var(--royal);
            --bs-btn-hover-bg: #0b4ad6;
            --bs-btn-hover-border-color: #0b4ad6;
            --bs-btn-active-bg: #0a42bf;
            --bs-btn-active-border-color: #0a42bf;
        }
        .btn-outline-primary {
            --bs-btn-color: var(--royal);
            --bs-btn-border-color: var(--royal);
            --bs-btn-hover-bg: var(--royal);
            --bs-btn-hover-border-color: var(--royal);
            --bs-btn-active-bg: var(--royal);
            --bs-btn-active-border-color: var(--royal);
        }
        .btn-outline-secondary {
            --bs-btn-color: var(--tangerine);
            --bs-btn-border-color: var(--tangerine);
            --bs-btn-hover-bg: var(--tangerine);
            --bs-btn-hover-border-color: var(--tangerine);
            --bs-btn-hover-color: #fff;
            --bs-btn-active-bg: var(--tangerine);
            --bs-btn-active-border-color: var(--tangerine);
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--royal);
            box-shadow: 0 0 0 .2rem rgba(16, 91, 255, .2);
        }

        summary { color: var(--charcoal); }

        details summary { cursor: pointer; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-chms sticky-top mb-4" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('people.index') }}">ChMS Lite</a>
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
        <div class="panel-chms rounded p-4 mb-4">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @yield('content')
        </div>
    </main>

    @stack('scripts')
</body>
</html>
