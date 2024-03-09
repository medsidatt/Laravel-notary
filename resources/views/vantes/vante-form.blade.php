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
<div class="container max-w-sm mx-auto top-bar-margin mb-3">
    <p class="py-2">Numero du terrain : {{ $terrain->num }}</p>
    <p class="py-2">Acheteur : {{ $acheteur->first_name . " " . $acheteur->last_name}}</p>
    <p class="py-2">Acheteur : {{ $vandeur->first_name . " " . $vandeur->last_name}}</p>
</div>
<form action="{{ route("create-vante") }}" class="max-w-sm mx-auto" method="post">
    @csrf
    <input type="hidden" name="a_id" value="{{ $acheteur->id }}">
    <input type="hidden" name="v_id" value="{{ $vandeur->id }}">
    <input type="hidden" name="t_id" value="{{ $terrain->id }}">
    <div class="mb-5">
        <label for="prix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Le prix</label>
        <input type="text" id="prix" name="prix" value="{{ old("prix") }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                   focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="Le prix">
        <span class="text-red-600">@error('prix') {{ $message }} @enderror</span>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
    focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
     text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Creer
        </button>
    </div>
    </form>

</body>
</html>
