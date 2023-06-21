@extends('layouts.app')

@section('title', 'Dashboard | Lesson 2')


@section('content')
    <div class="flex min-h-96 my-12 mx-12">
        <x-sidebar />
        <div class="bg-white flex flex-col flex-grow ml-11 rounded-2xl">
            <main class="mx-10 my-12">
                <h2 class="text-xl font-normal border-b mb-20 pb-5">{{ __('Dashboard') }}</h2>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
        
                {{ __('You are logged in!') }}
            </main>
        </div>
    </div>
@endsection
