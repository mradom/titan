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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Rally Setup Sheets
            </a>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
