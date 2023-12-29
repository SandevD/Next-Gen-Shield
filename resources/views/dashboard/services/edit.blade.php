@extends('dashboard.layouts.master')

@section('content')
<main class="overflow-hidden pb-6 pt-6">
    <!-- Contact section -->
    <section class="relative bg-white" aria-labelledby="contact-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative bg-white">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <!-- Contact form -->
                    <div class="py-10 px-2 sm:px-10 lg:col-span-2 xl:px-40">
                        <h2 class="text-3xl mt-2 text-gray-900 font-extrabold tracking-tight sm:text-4xl"><span class="animate-pulse">E</span>DIT <span class="animate-pulse">S</span>ERVICES</h2>
                        <p class="py-3">Want to add ? <a href="{{ route('dashboard.service') }}" class="text-{!! $basic->value?->colour !!}-700 hover:text-{!! $basic->value?->colour !!}-900">Add Services</a> or <a href="{{ route('dashboard.service.view') }}" class="text-{!! $basic->value?->colour !!}-700 hover:text-{!! $basic->value?->colour !!}-900">Go Back</a></p>
                        <form action="{{ route('dashboard.service.update') }}" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                            @csrf
                            <div>
                                <label for="one" class="block text-sm font-medium text-warm-gray-900">Name</label>
                                <div class="mt-1">
                                    <input type="text" name="one" id="one" autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" value="{{ $data->value->one }}">
                                </div>
                            </div>
                            <div>
                                <label for="icon" class="block text-sm font-medium text-warm-gray-900">SVG Icon <span class="text-{!! $basic->value?->colour !!}-700 hover:text-{!! $basic->value?->colour !!}-900"><a href="https://heroicons.com/">( click here to search and copy past svg tag of your choice )</a></span> </label>
                                <div class="mt-1">
                                    <input type="text" name="icon" id="icon" autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" value="{{ $data->value->icon }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex justify-between">
                                    <label for="desc_one" class="block text-sm font-medium text-warm-gray-900">Service Description</label>
                                </div>
                                <div class="mt-1">
                                    <textarea id="desc_one" name="desc_one" rows="4" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border border-warm-gray-300 rounded-md" aria-describedby="message-max">{{ $data->value->desc_one }}</textarea>
                                </div>
                            </div>
                            <input type="hidden" name="id" id="id" autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" value="{{ $data->id }}">
                            <div class="sm:col-span-2 sm:flex sm:justify-end">
                                <button type="submit" class="mt-2 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-{!! $basic->value?->colour !!}-700 hover:bg-{!! $basic->value?->colour !!}-800 focus:outline-none sm:w-auto">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection