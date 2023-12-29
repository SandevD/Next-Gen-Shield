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
                        <h2 class="text-3xl mt-2 text-gray-900 font-extrabold tracking-tight sm:text-4xl"><span class="animate-pulse">U</span>PDATE <span class="animate-pulse">I</span>MAGES</h2>
                        <form action="{{ route('dashboard.storeone') }}" method="POST" enctype="multipart/form-data" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8 mb-10">
                            @csrf
                            <div>
                                <h3 class="pb-5 text-{!! $basic->value?->colour !!}-700">IMAGE ONE</h3>
                                <input type="file" name="image_one" class="myfrm form-control">
                            </div>
                            <div>
                                <h3 class="pb-5 text-{!! $basic->value?->colour !!}-700">IMAGE TWO</h3>
                                <input type="file" name="image_two" class="myfrm form-control">
                            </div>
                            <div>
                                <h3 class="pb-5 text-{!! $basic->value?->colour !!}-700">IMAGE THREE</h3>
                                <input type="file" name="image_three" class="myfrm form-control">
                            </div>
                            <div>
                                <h3 class="pb-5 text-{!! $basic->value?->colour !!}-700">IMAGE FOUR</h3>
                                <input type="file" name="image_four" class="myfrm form-control">
                            </div>
                            <div>
                                <h3 class="pb-5 text-{!! $basic->value?->colour !!}-700">IMAGE FIVE</h3>
                                <input type="file" name="image_five" class="myfrm form-control">
                            </div>
                            <div>
                                <h3 class="pb-5 text-{!! $basic->value?->colour !!}-700">IMAGE SIX</h3>
                                <input type="file" name="image_six" class="myfrm form-control">
                            </div>
                            <div>
                                <h3 class="pb-5 text-{!! $basic->value?->colour !!}-700">IMAGE SEVEN</h3>
                                <input type="file" name="image_seven" class="myfrm form-control">
                            </div>
                            <div class="pt-5">
                                <button type="submit" class="mt-2 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-{!! $basic->value?->colour !!}-700 hover:bg-{!! $basic->value?->colour !!}-800 focus:outline-none sm:w-auto">Update</button>
                            </div>
                        </form>
                        <div class="bg-gray-100 shadow-xl">
                            <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                                <h2 class="text-3xl mb-10 text-gray-900 font-extrabold tracking-tight sm:text-4xl"><span class="animate-pulse">C</span>URRENT <span class="animate-pulse">I</span>MAGES</h2>
                                <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8 list-none">
                                    <li class="relative">
                                        <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                            <img src="/assets/img/{!! $addimage->image_one !!}">
                                            <button type="button" class="absolute inset-0 focus:outline-none">
                                        </div>
                                        <p class="mt-2 block text-sm font-medium text-{!! $basic->value?->colour !!}-900 truncate pointer-events-none">IMAGE ONE</p>
                                    </li>
                                    <li class="relative">
                                        <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                            <img src="/assets/img/{!! $addimage->image_two !!}">
                                            <button type="button" class="absolute inset-0 focus:outline-none">
                                        </div>
                                        <p class="mt-2 block text-sm font-medium text-{!! $basic->value?->colour !!}-900 truncate pointer-events-none">IMAGE TWO</p>
                                    </li>
                                    <li class="relative">
                                        <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                            <img src="/assets/img/{!! $addimage->image_three !!}">
                                            <button type="button" class="absolute inset-0 focus:outline-none">
                                        </div>
                                        <p class="mt-2 block text-sm font-medium text-{!! $basic->value?->colour !!}-900 truncate pointer-events-none">IMAGE THREE</p>
                                    </li>
                                    <li class="relative">
                                        <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                            <img src="/assets/img/{!! $addimage->image_four !!}">
                                            <button type="button" class="absolute inset-0 focus:outline-none">
                                        </div>
                                        <p class="mt-2 block text-sm font-medium text-{!! $basic->value?->colour !!}-900 truncate pointer-events-none">IMAGE FOUR</p>
                                    </li>
                                    <li class="relative">
                                        <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                            <img src="/assets/img/{!! $addimage->image_five !!}">
                                            <button type="button" class="absolute inset-0 focus:outline-none">
                                        </div>
                                        <p class="mt-2 block text-sm font-medium text-{!! $basic->value?->colour !!}-900 truncate pointer-events-none">IMAGE FIVE</p>
                                    </li>
                                    <li class="relative">
                                        <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                            <img src="/assets/img/{!! $addimage->image_six !!}">
                                            <button type="button" class="absolute inset-0 focus:outline-none">
                                        </div>
                                        <p class="mt-2 block text-sm font-medium text-{!! $basic->value?->colour !!}-900 truncate pointer-events-none">IMAGE SIX</p>
                                    </li>
                                    <li class="relative">
                                        <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                            <img src="/assets/img/{!! $addimage->image_seven !!}">
                                            <button type="button" class="absolute inset-0 focus:outline-none">
                                        </div>
                                        <p class="mt-2 block text-sm font-medium text-{!! $basic->value?->colour !!}-900 truncate pointer-events-none">IMAGE SEVEN</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection