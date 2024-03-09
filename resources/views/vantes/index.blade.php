@extends("layouts.app")

@section("contents")

    @if(Session::has('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
             role="alert">
            <span class="font-medium">Success alert!</span> {{ Session::get('success') }}
        </div>
    @endif

    @if(Session::has('fail'))
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <span class="font-medium">Danger alert!</span> {{ Session::get('fail') }}
        </div>
    @endif

    <div class="mt-4 relative w-11/12 mx-auto overflow-x-auto shadow-md sm:rounded-lg">
        <div class="mb-5 flex justify-end">
            <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
               href="{{ route("acheter-form") }}">creer une vante</a>
        </div>
        @if(!empty($vantes))
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        N de vante
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acheteur
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Vandeur
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($vantes as $vante)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $vante->id . "" . $vante->created_at->format('Ymd') }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $vante->a_nom . " " . $vante->a_prenom }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vante->v_nom . " " . $vante->v_prenom }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('vante-info',  ['id' => $vante->id]) }}"
                               class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif


    </div>

@endsection
