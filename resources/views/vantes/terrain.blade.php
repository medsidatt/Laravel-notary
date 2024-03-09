<!doctype html>
<html>
<head>
    <title>Se connectee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<form action="{{ route("create-terrain") }}" class="max-w-sm mx-auto top-bar-margin" method="post">
    @csrf
    <h4 class="text-2xl text-blue-950 mb-3 font-bold">Informations du terrain</h4>

    <div class="mb-5">
        <label for="num" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero</label>
        <input type="text" id="num" name="num" value="{{ old("num") }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="Num">
        <span class="text-red-600">@error('num') {{ $message }} @enderror</span>
    </div>
    <div class="mb-5">
        <label for="long" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Long</label>
        <input type="text" id="long" name="long" value="{{ old("long") }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                   focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="Long">
        <span class="text-red-600">@error('long') {{ $message }} @enderror</span>
    </div>
    <div class="mb-5">
        <label for="larg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Larg</label>
        <input type="text" id="larg" name="larg" value="{{ old("larg") }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                   focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="Largeur">
        <span class="text-red-600">@error('larg') {{ $message }} @enderror</span>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
    focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
     text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
</form>

</body>
</html>
