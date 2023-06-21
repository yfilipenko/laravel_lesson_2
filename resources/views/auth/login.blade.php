@extends('layouts.app')

@section('content')
    <section class="max-w-screen-md mx-auto px-2 py-32">
        <div class="text-center mb-16">
            <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
              {{ __('Sign') }} <span class="text-red-500">{{ __('in') }}</span>
            </h3>
        </div>
        <form class="w-96" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                        {{ __('Email Address') }}
                    </label>
                    <input id="email" type="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 transition duration-300 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                        {{ __('Password') }}
                    </label>
                    <input id="password" type="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 transition duration-300 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <input class="form-check-input mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="flex justify-center w-full">
                <button class="shadow bg-red-500 hover:bg-red-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded transition duration-300" type="submit">
                    {{ __('Submit') }}
                </button>
            </div>
        </form>
        @if (Route::has('password.request'))
            <a class="flex justify-center mt-6 hover:text-red-500 btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
	</section>
@endsection
