@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
    <div class="flex justify-between w-full">
        <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
        Data Pengelola
        </h2>

        <div class="flex px-0 my-6 space-x-3">
            @auth
            @include('components.add-btn', ['url' => 'pengelola', 'btn' => 'Pengelola'])
            @endauth
            @include('components.search-input', ['url' => 'pengelola'])
        </div>
    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <colgroup>
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 30%;">
                <col span="1" style="width: 40%;">
                <col span="1" style="width: 20%;">
            </colgroup>
            <thead>
            <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">Nama Pengelola</th>
                <th class="px-4 py-3">Nama Pasar</th>
                {{-- <th class="px-4 py-3">Alamat</th> --}}
                <th class="px-4 py-3">Actions</th>
            </tr>
            </thead>
            <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
            >
            @foreach ($pengelolas as $pengelola)
            <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                    {{ $loop->iteration }}
                </td>
                <td class="px-4 py-3 text-sm flex-initial w-16">
                    {{ $pengelola->user->name }}
                </td>
                <td class="px-4 py-3 text-sm flex-initial w-16">
                    {{ $pengelola->pasar->nama_pasar }}
                </td>
                {{-- <td class="px-4 py-3 text-sm flex-initial">
                    {{ $pengelola->pasar->alamat }}
                </td> --}}
                <td class="px-4 py-3 w-4 flex-initial">
                    <div class="flex items-center space-x-4 text-sm">

                        <a href="/pengelola/{{ $pengelola->id }}/view"
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
                        @auth
                        <a href="/pengelola/{{ $pengelola->id }}/edit"
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Edit"
                        >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                            ></path>
                        </svg>
                        </a>

                        <form method="GET" action="/pengelola/{{ $pengelola->id }}/delete"  >
                            @csrf
                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray">
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                    fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>
                        </form>
                        @endauth
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
