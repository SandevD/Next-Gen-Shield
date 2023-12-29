@extends('dashboard.layouts.master')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
<div>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8 pt-12">
            <div class="text-center">
                <h2 class="text-base font-semibold text-{!! $basic->value?->colour !!}-600 tracking-wide uppercase">NEXTGENSHIELD</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">LOGIN</p>
            </div>
        </div>
    </div>
    <div class=" py-2 px-4 md:px-2 md:flex md:items-center md:justify-center">
        <div class="">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="pt-5">
                    <label for="email" class="block text-sm font-medium text-{!! $basic->value?->colour !!}-700">Email</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" class="shadow-sm focus:ring-{!! $basic->value?->colour !!}-500 focus:border-{!! $basic->value?->colour !!}-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com" required>
                    </div>
                </div>
                <div class="pt-5">
                    <label for="password" class="block text-sm font-medium text-{!! $basic->value?->colour !!}-700">Password</label>
                    <div class="mt-1">
                        <input type="password" name="password" id="password" class="shadow-sm focus:ring-{!! $basic->value?->colour !!}-500 focus:border-{!! $basic->value?->colour !!}-500 block w-full sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                </div>
                <div class="pt-5 flex justify-end items-center">
                    <button type="submit" class=" py-2 px-10 sm:px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{!! $basic->value?->colour !!}-700 hover:bg-{!! $basic->value?->colour !!}-900 ">Save &#10162;</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection