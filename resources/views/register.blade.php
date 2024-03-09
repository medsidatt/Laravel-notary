<!doctype html>
<html>
<head>
    <title>Inscrire</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

@if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="font-medium">Success alert!</span> {{ Session::get('success') }}
    </div>
@endif
@if(Session::has('fail'))
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">Danger alert!</span> {{ Session::get('fail') }}
    </div>
@endif

<form action="{{ route("register-user") }}" class="w-1/2 mx-auto top-bar-margin" method="post">
    @csrf
    <h2 class="text-2xl text-blue-950 text-center mb-3 font-bold">Creer une compte</h2>
    <div class="flex flex-wrap">
        <div class="mb-5 w-1/2 px-2">
            <label for="first-name" class="block mb-2 text-sm font-medium
            text-gray-900 dark:text-gray-900">Nom</label>
            <input type="text" id="first-name" name="first_name" value="{{ old("first_name") }}"
                   class="border border-gray-900 text-green-900 dark:text-gray-400 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500
                   focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
                   placeholder="Nom">
            <span class="text-red-600">@error('first_name') {{ $message }} @enderror</span>
        </div>
        <div class="mb-5 w-1/2 px-2">
            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Prenom</label>
            <input type="text" id="last-name" name="last_name" value="{{ old("last_name") }}"
                   class="border border-gray-900 text-green-900 dark:text-gray-400 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500
                   focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
                   placeholder="Prenom">
            <span class="text-red-600">@error('last_name') {{ $message }} @enderror</span>
        </div>
    </div>


    <div class="flex flex-wrap">
        <div class="mb-5 w-1/2 px-2">
        <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Tel</label>
        <input type="tel" id="tel" name="tel" value="{{ old("tel") }}"
               class="border border-gray-900 text-green-900 dark:text-gray-400 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500
               focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
               placeholder="45454545">
        <span class="text-red-600">@error('tel') {{ $message }} @enderror</span>
    </div>
        <div class="mb-5 w-1/2 px-2">
        <label for="nni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">NNI</label>
        <input type="text" id="nni" name="nni" value="{{ old("nni") }}"
               class="border border-gray-900 text-green-900 dark:text-gray-400 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500
               focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
               placeholder="NNI">
        <span class="text-red-600">@error('nni') {{ $message }} @enderror</span>
    </div>
    </div>


    <div class="flex flex-wrap">
        <div class="mb-5 w-1/2 px-2">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Email</label>
        <input type="email" id="email" name="email" value="{{ old("email") }}"
               class="border border-gray-900 text-green-900 dark:text-gray-400 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500
               focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
               placeholder="Email">
        <span class="text-red-600">@error('email') {{ $message }} @enderror</span>
    </div>
        <div class="mb-5 w-1/2 px-2">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Mot de pass</label>
        <input type="password" id="password" name="password" value="{{ old("password") }}"
               class="border border-gray-900 text-green-900 dark:text-gray-400 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500
               focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
               placeholder="Mot de pass">
        <span class="text-red-600">@error('password') {{ $message }} @enderror</span>
    </div>
    </div>


    <div class="mb-5">
        <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Localisation</label>
        <input type="text" id="location" name="location" value="{{ old("location") }}"
               class="border border-gray-900 text-green-900 dark:text-gray-400 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500
               focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
               placeholder="Localisation">
        <span class="text-red-600">@error('location') {{ $message }} @enderror</span>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
    focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
     text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Creer le compte</button>
</form>

</body>
</html>
