<!doctype html>
<html>
<head>
    <style>
        @page { size: auto;  margin: 0mm; }
    </style>
    <title>Vante informations</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="print:text-xl screen:text-sm px-5">
<div class="flex flex-col mx-auto mt-10">
    <div class="flex justify-between">
        <div class="flex flex-col w-1/3">
            <p class="mb-2 text-center">{{ $imame->first_name . " " . $imame->last_name  }} RABANI</p>
            <p class="mb-2 text-center">Tel: {{ $imame->tel }}</p>
            <p class="mb-2 text-center">E-mail: <span class="text-sm">{{ $imame->email }}</span></p>
            <p class="mb-2 text-center text-sm">Nouakchott - Mauritanie</p>
        </div>
        <div class="w-1/4 p-2 m-2">
            <img src="{{ asset('img/mosque.png') }}">
        </div>

        <div class="flex flex-col w-1/3">
            <p class="mb-2 text-center"> الإمام محمد محمود ولد أحمد يورا الرباني</p>
            <p class="mb-2 text-center">الهاتف: 45343212</p>
            <p class="mb-2 text-center"><span class="text-sm">example@gmail.com</span>البريد إلكتروني:</p>
            <p class="mb-2 text-center text-sm">انواكشوط - موريتانيا</p>
        </div>
    </div>
    <h3 class="font-bold text-gray-800 text-center my-3"> <span class="text-2xl">الموضوع:</span>  توثيق بيعة قطعة أرضية</h3>
    <div class="text-center p-5">
        <span>M. {{ $vante->v_nom . " " . $vante->v_prenom }} né avant nous le (date de naissance) </span>
        <span>Le numéro d'identification national {{ $vante->v_nni }} et
            notre témoignage et notre lettre attestant qu'il a renoncé au terrain</span>
        <span> {{ $vante->num }} au profit de Mme {{ $vante->a_nom . " " . $vante->a_prenom }} née de (a)</span>
        <span> Daté (date de naissance) Numéro National {{ $vante->a_nni }} en échange de (prix de la pièce)</span>
    </div>
   <p class="mt-4 m-12 p-10 w-10/12">Cachier: </p>
</div>
</body>
</html>
