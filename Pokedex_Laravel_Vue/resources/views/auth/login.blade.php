@extends('layouts.app')

@section('content')
<div class="flex justify-center">
<div class="w-full max-w-md ">
                <!--<div class="card-header">{{ __('Login') }}</div>-->
                    <form method="POST" action="{{ route('login') }}" class="bg-yellow-500 bg-opacity-75 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        <div class="mb-4">
                            <label for="username" class="text-center block text-red-800 text-sm mb-2">{{ __('Username') }}</label>
                                <input id="username" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="text-center block text-red-800 text-sm  mb-2">{{ __('Password') }}</label>

                            <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                 <!--   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="align-baseline text-sm text-red-800" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>-->
                                </div>

                                <button type="submit" class="bg-red-800 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="inline-block align-baseline text-sm text-red-800 hover:text-red-600" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                    </form>
                </div>
       
</div>
@endsection
