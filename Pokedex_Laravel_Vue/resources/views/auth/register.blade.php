@extends('layouts.app')

@section('content')
<div class="flex justify-center" >
    <div class="w-full max-w-md ">
                    <form method="POST" action="{{ route('register') }}" class="bg-yellow-500 bg-opacity-75 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="text-center block text-red-800 text-sm mb-2">{{ __('Userame') }}</label>
                            <input id="username" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                     
                        <div class="mb-4">
                            <label for="password" class="text-center block text-red-800 text-sm mb-2">{{ __('Password') }}</label>

                                <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm" class="text-center block text-red-800 text-sm mb-2">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="flex items-center justify-between">
                                <button type="submit" class="bg-red-800 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>

@endsection
