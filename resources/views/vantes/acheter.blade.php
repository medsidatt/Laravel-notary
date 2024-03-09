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

<form action="{{ route("create-acheteur") }}" class="max-w-sm mx-auto top-bar-margin" method="post">
    @csrf
    <h4 class="text-2xl text-blue-950 mb-3 font-bold">Acheteur</h4>

    <div class="mb-5">
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
        <input type="text" id="first_name" name="first_name" value="{{ old("first_name") }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="Nom">
        <span class="text-red-600">@error('first_name') {{ $message }} @enderror</span>
    </div>
    <div class="mb-5">
        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
        <input type="text" id="last_name" name="last_name" value="{{ old("last_name") }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                   focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="Prenom">
        <span class="text-red-600">@error('last_name') {{ $message }} @enderror</span>
    </div>
    <div class="mb-5">
        <label for="nni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">NNI</label>
        <input type="text" id="nni" name="nni" value="{{ old("nni") }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                   focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="NNI">
        <span class="text-red-600">@error('nni') {{ $message }} @enderror</span>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
    focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
     text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant
        </button>
    </div>
</form>

</body>
</html>
