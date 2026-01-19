<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>BridgeTech Dynamics — Simple Static Pages</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            margin: 0;
            background: #f7fafc;
            color: #1a202c;
        }

        main {
            padding: 2rem 1rem;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <x-header />

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <x-footer />
</body>
</html>
