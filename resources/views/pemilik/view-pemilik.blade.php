@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <div class="flex my-6">
            @include('components.back-btn', ['url' => 'pemilik'])
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Informasi Pemilik</h2>
        </div>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <tbody>
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1 font-semibold">Nama </td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->nama }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1 font-semibold">Alamat </td>
                            <td class="px-1 py-1 ">:</td>
                            <td class="px-1 py-1">{{ $pemilik->alamat }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1 font-semibold">NIK </td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->nik }}</td>
                            </tr>

                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1 font-semibold">No WhatsApp </td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->no_wa }}</td>
                            </tr>

                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1 font-semibold">No Telephone </td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->no_telp }}</td>
                            </tr>

                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1 font-semibold">Dibuat Oleh</td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->created_by }}</td>
                            </tr>

                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1 font-semibold">Dibuat Pada</td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->created_at }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1 font-semibold">Terakhir diedit Pada</td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->created_at }}</td>
                            </tr>

                            <tr class="text-gray-700 dark:text-gray-400">
                            </tr>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
