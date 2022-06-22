@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">View Pemilik</h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <tbody>
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1">Nama </td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->nama }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1">Alamat </td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->alamat }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1">NIK </td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->nik }}</td>
                            </tr>

                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1">No WhatsApp </td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->no_wa }}</td>
                            </tr>
                            
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1">No Telephone </td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->no_telp }}</td>
                            </tr>

                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1">Dibuat Oleh</td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->created_by }}</td>
                            </tr>

                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1">Dibuat Pada</td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->created_at }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1">Terakhir diedit Pada</td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $pemilik->created_at }}</td>
                            </tr>
                            
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3"><a href="/pemilik"
                                class="px-4 py-2 mr-3 text-sm font-medium leading-5 text-white  transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                                >
                                Back
                            </a></td>
                            </tr>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
