@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Informasi {{ $pasar->nama_pasar }}</h2>

        <div class="px-4 py-3 mb-8 text-sm text-left dark:text-gray-200 bg-white rounded-lg shadow-md dark:bg-gray-800">

            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <colgroup>
                        <col span="1" style="width: 20%;">
                        <col span="1" style="width: 80%;">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th class="font-semibold">Nama Pasar</th>
                        <td>{{ $pasar->nama_pasar }}</td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Alamat</th>
                        <td>{{ $pasar->alamat }}</td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Pengelola</th>
                        <td>
                            @if(empty($pasar->pengelola->user->name))
                                -
                            @else
                                {{ $pasar->pengelola->user->name }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Jumlah Tenant</th>
                        <td>
                            jumlah
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
