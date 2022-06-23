@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Informasi Pengelola</h2>

        <div class="px-4 py-3 mb-8 text-sm text-left dark:text-gray-400 bg-white rounded-lg shadow-md dark:bg-gray-800">

            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <colgroup>
                        <col span="1" style="width: 20%;">
                        <col span="1" style="width: 80%;">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th class="font-semibold">Nama Pengelola</th>
                        <td>: {{ $pengelola->user->name }}</td>
                    </tr>
                    {{-- <tr>
                        <th class="font-semibold">Alamat</th>
                        <td>: {{ $pasar->alamat }}</td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Pengelola</th>
                        <td>
                            @if(empty($pasar->pengelola->user->name))
                                : -
                            @else
                                : {{ $pasar->pengelola->user->name }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Jumlah Tenant</th>
                        <td>
                            : jumlah
                        </td>
                    </tr>
                    <tr class="h-4"><td></td></tr>
                    <tr>
                        <th class="font-semibold">Dibuat oleh</th>
                        <td>
                            : {{ $pasar->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Dibuat pada</th>
                        <td>
                            : {{ $pasar->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Terakhir diedit oleh</th>
                        <td>
                            @if(empty($pasar->edited_by))
                                : {{ $pasar->created_by }}
                            @else
                                : {{ $pasar->edited_by }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Terakhir diedit pada</th>
                        <td>
                            : {{ $pasar->updated_at }}
                        </td>
                    </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
