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

    <form action="{{ route("login-user") }}" class="max-w-sm mx-auto top-bar-margin" method="post">
        @csrf
        <h2 class="text-2xl text-blue-950 text-center mb-3 font-bold">Se connecter</h2>

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">E-mail</label>
            <input type="email" id="email" name="email" value="{{ old("email") }}"
                   class="border border-gray-900 text-green-900 dark:text-gray-400 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500
               focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
                   placeholder="email@example.com">
            <span class="text-red-600">@error('email') {{ $message }} @enderror</span>
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Le mot de pass</label>
            <input type="password" id="password" name="password" value="{{ old("password") }}"
                   class="border border-gray-900 text-green-900 dark:text-gray-400 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500
               focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
                   placeholder="Le mot de pass">
            <span class="text-red-600">@error('password') {{ $message }} @enderror</span>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
    focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
     text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Se connecter</button>
        ou <a class="px-2 underline text-blue-700" href="{{ route("register-form") }}">Creer un compte</a>
    </form>


</body>
</html>
