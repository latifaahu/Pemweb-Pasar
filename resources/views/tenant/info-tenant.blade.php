@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Informasi {{ $tenants->nama_tenant }}</h2>

        <div class="px-4 py-3 mb-8 text-sm text-left dark:text-gray-400 bg-white rounded-lg shadow-md dark:bg-gray-800">

            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <colgroup>
                        <col span="1" style="width: 20%;">
                        <col span="1" style="width: 80%;">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th class="font-semibold">Nama Tenant</th>
                        <td>: {{ $tenants->nama_tenant }}</td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Nama Pemilik</th>
                        <td>: {{ $tenants->pemilik->nama }}</td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Nama Pasar</th>
                        <td>: {{$tenants->pasar->nama_pasar}}</td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Biaya Iuran</th>
                        <td>: {{$tenants->biaya_iuran}}</td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Koordinat</th>
                        <td>: {{$tenants->longitude}}, {{$tenants->latitude}}</td>
                    </tr>
                    <tr class="h-4"><td></td></tr>
                    <tr>
                        <th class="font-semibold">Riwayat</th>
                        <td><a href="/riwayat-kepemilikan">Riwayat Kepemilikan</a><br>
                    </tr>
                        <th class="font-semibold"></th>
                        <td><a href="/riwayat-iuran">Riwayat Iuran</a><br>
                    <tr class="h-4"><td></td></tr>
                    <tr>
                        <th class="font-semibold">Dibuat oleh</th>
                        <td>
                            : {{ $tenants->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Dibuat pada</th>
                        <td>
                            : {{ $tenants->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Terakhir diedit oleh</th>
                        <td>
                            @if(empty($tenants->edited_by))
                                : {{ $tenants->created_by }}
                            @else
                                : {{ $tenants->edited_by }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Terakhir diedit pada</th>
                        <td>
                            : {{ $tenants->updated_at }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
