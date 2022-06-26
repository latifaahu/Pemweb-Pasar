@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <div class="flex my-6">
            @include('components.back-btn', ['url' => 'pemilik'])
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Informasi {{ $pemilik->nama }}</h2>
        </div>

        <div class="px-4 py-3 mb-8 text-sm text-left dark:text-gray-400 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <colgroup>
                            <col span="1" style="width: 20%;">
                            <col span="1" style="width: 80%;">
                        </colgroup>
                        <tbody>
                            <tr >
                            <td class="font-semibold">Nama </td>
                            
                            <td >: {{ $pemilik->nama }}</td>
                            </tr>
                            <tr >
                            <td class=" font-semibold">Alamat </td>
                            
                            <td>: {{ $pemilik->alamat }}</td>
                            </tr>
                            <tr>
                            <td class="font-semibold">NIK </td>
                            
                            <td > : {{ $pemilik->nik }}</td>
                            </tr>

                            <tr >
                            <td class="font-semibold">No WhatsApp </td>
                           
                            <td >: {{ $pemilik->no_wa }}</td>
                            </tr>

                            <tr >
                            <td class="font-semibold">No Telephone </td>
                            
                            <td >: {{ $pemilik->no_telp }}</td>
                            </tr>

                            <tr >
                            <td class="font-semibold">Jumlah Tenant </td>
                            
                            <td >: {{ $pemilik->tenant->count() }}</td>
                            </tr>

                            <tr >
                            <td class=" font-semibold">Dibuat oleh</td>
                            
                            <td >: {{ $pemilik->created_by }}</td>
                            </tr>

                            <tr >
                            <td class="font-semibold">Dibuat pada</td>
                            
                            <td >: {{ $pemilik->created_at }}</td>
                            </tr>

                            <tr >
                            <td class="font-semibold">Terakhir diedit oleh</td>
                           
                            <td >
                                @if(empty($pemilik->edited_by))
                                    : {{ $pemilik->created_by }}
                                @else
                                    : {{ $pemilik->edited_by }}
                                @endif
                            </td>
                            </tr>

                            <tr >
                            <td class="font-semibold">Terakhir diedit pada</td>
                            
                            <td >: {{ $pemilik->created_at }}</td>
                            </tr>

                            <tr >
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="px-4 py-3 mb-8 text-sm text-left dark:text-gray-400 bg-white rounded-lg shadow-md dark:bg-gray-800">

            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama Tenant</th>
                        <th class="px-4 py-3">Nama Pemilik</th>
                        <th class="px-4 py-3">Biaya Iuran</th>
                    </tr>
                    </thead>
                    <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                    >
                    @foreach ($pemilik->tenant as $tenant)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-4 py-3 text-sm flex-initial w-16">
                            {{ $tenant->nama_tenant }}
                        </td>
                        <td class="px-4 py-3 text-sm flex-initial w-16">
                            {{ $tenant->pemilik->nama }}
                        </td>
                        <td class="px-4 py-3 text-sm flex-initial">
                            {{ $tenant->biaya_iuran }}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
