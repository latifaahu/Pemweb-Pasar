@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
    <div class="flex justify-between w-full">
        <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
        Data Riwayat Kepemilikan
        </h2>

        <div class="flex px-0 my-6 space-x-3">
            @auth
                @include('components.add-btn', ['url' => 'riwayat-kepemilikan', 'btn' => 'Transaksi Tenant'])
            @endauth
            @include('components.cetak-btn', ['url' => 'riwayat-kepemilikan', 'btn' => 'Riwayat'])
            @include('components.search-input', ['url' => 'riwayat-kepemilikan', 'text' => 'riwayat'])
        </div>
    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
            <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">Tanggal</th>
                <th class="px-4 py-3">Nama Tenant</th>
                <th class="px-4 py-3">Nama Pasar</th>
                <th class="px-4 py-3">Pemilik Lama</th>
                <th class="px-4 py-3">Pemilik Baru</th>
                <th class="px-4 py-3">Action</th>
            </tr>
            </thead>
            <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
            >
            @foreach ($kepemilikans as $kepemilikan)
            <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                    {{ $loop->iteration }}
                </td>
                <td class="px-4 py-3 text-sm flex-initial w-16">
                    {!! date('d/M/y', strtotime($kepemilikan->created_at)) !!}
                </td>
                <td class="px-4 py-3 text-sm flex-initial w-16">
                    {{ $kepemilikan->tenant->nama_tenant }}
                </td>
                <td class="px-4 py-3 text-sm flex-initial w-16">
                    {{ $kepemilikan->tenant->pasar->nama_pasar }}
                </td>
                <td class="px-4 py-3 text-sm flex-initial w-16">
                    {{ $kepemilikan->pemilikLama->nama }}
                </td>
                <td class="px-4 py-3 text-sm flex-initial w-16">
                    @if($kepemilikan->pemilik_id_baru)
                        {{ $kepemilikan->pemilikBaru->nama }}
                    @else
                        -
                    @endif
                </td>
                <td class="px-4 py-3 w-4 flex-initial">
                    <div class="flex items-center space-x-4 text-sm">
                        <a href="/riwayat-kepemilikan/{{ $kepemilikan->id }}/view"
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="View"
                        >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                        </svg>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>

        <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
        >
        <span class="flex items-center col-span-3">
            Showing 1-10 of 100
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
            <ul class="inline-flex items-center">
                <li>
                <button
                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                    aria-label="Previous"
                >
                    <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                    >
                    <path
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                    ></path>
                    </svg>
                </button>
                </li>
                <li>
                <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                    1
                </button>
                </li>
                <li>
                <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                    2
                </button>
                </li>
                <li>
                <button
                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                    3
                </button>
                </li>
                <li>
                <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                    4
                </button>
                </li>
                <li>
                <span class="px-3 py-1">...</span>
                </li>
                <li>
                <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                    8
                </button>
                </li>
                <li>
                <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                    9
                </button>
                </li>
                <li>
                <button
                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                    aria-label="Next"
                >
                    <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                    >
                    <path
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                    ></path>
                    </svg>
                </button>
                </li>
            </ul>
            </nav>
        </span>
        </div>
    </div>
    </div>
</main>
@endsection
