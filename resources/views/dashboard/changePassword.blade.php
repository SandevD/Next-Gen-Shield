@extends('dashboard.layouts.master')

@section('content')
<main class="overflow-hidden pb-6 pt-6">
    <!-- Contact section -->
    <section class="relative bg-white" aria-labelledby="contact-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative bg-white">
                <div class="grid grid-cols-1">
                    <!-- Contact form -->
                    <div class="py-10 px-2 sm:px-10 lg:col-span-2 xl:px-40">
                        <h2 class="text-3xl mt-2 text-gray-900 font-extrabold tracking-tight sm:text-4xl"><span class="animate-pulse">R</span>ESET <span class="animate-pulse">P</span>ASSWORD</h2>
                        <form action="{{ route('change.password') }}" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                            @csrf
                            <div>
                                <label for="current_password" class="block text-sm font-medium text-warm-gray-900">CURRENT PASSWORD</label>
                                <div class="mt-1">
                                    <input id="password" name="current_password" type="password" autocomplete="email" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" value="">
                                </div>
                            </div>
                            <div></div>
                            <div>
                                <div class="flex justify-between">
                                    <label for="new_password" class="block text-sm font-medium text-warm-gray-900">NEW PASSWORD</label>
                                </div>
                                <div class="mt-1">
                                    <input type="password" name="new_password" id="password" autocomplete="tel" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" aria-describedby="phone-optional" value="">
                                </div>
                            </div>
                            <div></div>
                            <div>
                                <label for="new_confirm_password" class="block text-sm font-medium text-warm-gray-900">CONFIRM PASSWORD</label>
                                <div class="mt-1">
                                    <input type="password" name="new_confirm_password" id="password" autocomplete="given-name" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" value="">
                                </div>
                            </div>
                            <div></div>
                            <div>
                                <button type="submit" class="mt-2 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-{!! $basic->value?->colour !!}-700 hover:bg-{!! $basic->value?->colour !!}-800 focus:outline-none sm:w-auto">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection