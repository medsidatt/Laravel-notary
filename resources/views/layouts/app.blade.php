<!doctype html>
<html>
<head>
    <title>Notary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('myown.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex item-center">
            <li>
                <a href="" class="p-3">Home</a>
            </li>
            <li>
                <a href="" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="{{ route("vantes-index") }}" class="p-3">Vantes</a>
            </li>
        </ul>
        <a href="{{ route('logout') }}">Deconnecter</a>
    </nav>

@yield("contents")
</body>
</html>
