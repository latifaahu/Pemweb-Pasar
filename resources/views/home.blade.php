@extends('layouts.app')

@section('content')




    <div class="container grid px-6 mx-auto">
    <div class="flex justify-between w-full">
        <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
        Login Page
        </h2>

    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <a href="http://127.0.0.1:8000/pasar"><button type="button" class="btn btn-success btn-sm">Dashboard</button></a>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>

@endsection

{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <a href="http://127.0.0.1:8000/pasar"><button type="button" class="btn btn-success btn-sm">Dashboard</button></a>
            </div>
        </div>
    </div>
</div>--}}

