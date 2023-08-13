<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Nicolas Carlomagno Rally School!')</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        body {
            background-color: #f8f9fa;
        }
        .header {
            background-color: #000;
            color: #f56920;
            padding: 20px;
            text-align: center;
        }
        .section-title {
            background-color: #f56920;
            color: #fff;
            padding: 5px;
            text-align: center;
        }
        .table-striped > tbody > tr:nth-of-type(odd) {
            background-color: rgba(245, 105, 32, 0.05);
        }
        .logo {
            background-image: url('/logo.jpeg');
            background-size: contain;
            width: 180px;
            height: 72px;
            display: block;
            margin: 0 auto;
        }
        .copyright {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="logo"></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication -->
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-link nav-link" type="submit">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main class="py-4">
        @yield('content')
    </main>

    <div class="copyright">
        &copy; {{ date('Y') }} Omar Mrad. All rights reserved.
    </div>
</body>
</html>
