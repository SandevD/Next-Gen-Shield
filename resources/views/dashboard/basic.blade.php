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
                        <h2 class="text-3xl mt-2 text-gray-900 font-extrabold tracking-tight sm:text-4xl"><span class="animate-pulse">U</span>PDATE <span class="animate-pulse">B</span>ASIC <span class="animate-pulse">C</span>ONTENTS</h2>
                        <form action="{{ route('dashboard.update') }}" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                            @csrf
                            <div class="flex flex-col justify-center">
                                <label for="colour" class="block text-sm font-medium text-warm-gray-900 mb-2">Theme Colour</label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <select id="colour" name="colour" autocomplete="country-name" class="max-w-lg block focus:ring-{!! $basic->value?->colour !!}-500 focus:border-{!! $basic->value?->colour !!}-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                        <option class="bg-amber-600 text-white" value="amber" @if ($basic->value?->colour == "amber") selected @endif>amber</option>
                                        <option class="bg-lime-600 text-white" value="lime" @if ($basic->value?->colour == "lime") selected @endif>lime</option>
                                        <option class="bg-green-600 text-white" value="green" @if ($basic->value?->colour == "green") selected @endif>green</option>
                                        <option class="bg-teal-600 text-white" value="teal" @if ($basic->value?->colour == "teal") selected @endif>teal</option>
                                        <option class="bg-sky-600 text-white" value="sky" @if ($basic->value?->colour == "sky") selected @endif>sky</option>
                                        <option class="bg-violet-600 text-white" value="violet" @if ($basic->value?->colour == "violet") selected @endif>violet</option>
                                        <option class="bg-fuchsia-600 text-white" value="fuchsia" @if ($basic->value?->colour == "fuchsia") selected @endif>fuchsia</option>
                                        <option class="bg-rose-600 text-white" value="rose" @if ($basic->value?->colour == "rose") selected @endif>rose</option>
                                    </select>
                                </div>
                            </div>
                            <div></div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-warm-gray-900">Email</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" value="{{ $basic->value?->email }}">
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between">
                                    <label for="phone" class="block text-sm font-medium text-warm-gray-900">Phone</label>
                                </div>
                                <div class="mt-1">
                                    <input type="text" name="phone" id="phone" autocomplete="tel" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" aria-describedby="phone-optional" value="{{ $basic->value?->phone }}">
                                </div>
                            </div>
                            <div>
                                <label for="address" class="block text-sm font-medium text-warm-gray-900">Address</label>
                                <div class="mt-1">
                                    <input type="text" name="address" id="address" autocomplete="given-name" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" value="{{ $basic->value?->address }}">
                                </div>
                            </div>
                            <div>
                                <label for="company" class="block text-sm font-medium text-warm-gray-900">Company Name</label>
                                <div class="mt-1">
                                    <input type="text" name="company" id="company" autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" value="{{ $basic->value?->company }}">
                                </div>
                            </div>
                            <!--<div class="sm:col-span-2">
                                <label for="subject" class="block text-sm font-medium text-warm-gray-900">Subject</label>
                                <div class="mt-1">
                                    <input type="text" name="subject" id="subject" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md">
                                </div>
                            </div>-->
                            <div class="sm:col-span-2">
                                <div class="flex justify-between">
                                    <label for="message" class="block text-sm font-medium text-warm-gray-900">AboutUs Section 1</label>
                                    <span id="message-max" class="text-sm text-warm-gray-500">Max. 500 characters</span>
                                </div>
                                <div class="mt-1">
                                    <textarea id="about_one" name="about_one" rows="4" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border border-warm-gray-300 rounded-md" aria-describedby="message-max">{{ $basic->value?->about_one }}</textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex justify-between">
                                    <label for="message" class="block text-sm font-medium text-warm-gray-900">AboutUs Section 2</label>
                                    <span id="message-max" class="text-sm text-warm-gray-500">Max. 500 characters</span>
                                </div>
                                <div class="mt-1">
                                    <textarea id="about_two" name="about_two" rows="4" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border border-warm-gray-300 rounded-md" aria-describedby="message-max">{{ $basic->value?->about_two }}</textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex justify-between">
                                    <label for="message" class="block text-sm font-medium text-warm-gray-900">AboutUs Section 3</label>
                                    <span id="message-max" class="text-sm text-warm-gray-500">Max. 500 characters</span>
                                </div>
                                <div class="mt-1">
                                    <textarea id="about_third" name="about_third" rows="4" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border border-warm-gray-300 rounded-md" aria-describedby="message-max">{{ $basic->value?->about_third }}</textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex justify-between">
                                    <label for="message" class="block text-sm font-medium text-warm-gray-900">Mission</label>
                                    <span id="message-max" class="text-sm text-warm-gray-500">Max. 500 characters</span>
                                </div>
                                <div class="mt-1">
                                    <textarea id="mission" name="mission" rows="4" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border border-warm-gray-300 rounded-md" aria-describedby="message-max">{{ $basic->value?->mission }}</textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex justify-between">
                                    <label for="message" class="block text-sm font-medium text-warm-gray-900">Vission</label>
                                    <span id="message-max" class="text-sm text-warm-gray-500">Max. 500 characters</span>
                                </div>
                                <div class="mt-1">
                                    <textarea id="vission" name="vission" rows="4" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border border-warm-gray-300 rounded-md" aria-describedby="message-max">{{ $basic->value?->vission }}</textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex justify-between">
                                    <label for="message" class="block text-sm font-medium text-warm-gray-900">Important Elements of Basic Security Training</label>
                                    <span id="message-max" class="text-sm text-warm-gray-500"></span>
                                </div>
                                <div class="mt-1">
                                    <textarea id="training_one" name="training_one" rows="4" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border border-warm-gray-300 rounded-md" aria-describedby="message-max">{{ $basic->value?->training_one }}</textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex justify-between">
                                    <label for="message" class="block text-sm font-medium text-warm-gray-900">Important Elements of English Language Skill</label>
                                    <span id="message-max" class="text-sm text-warm-gray-500"></span>
                                </div>
                                <div class="mt-1">
                                    <textarea id="training_two" name="training_two" rows="4" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border border-warm-gray-300 rounded-md" aria-describedby="message-max">{{ $basic->value?->training_two }}</textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex justify-between">
                                    <label for="message" class="block text-sm font-medium text-warm-gray-900">Important of Fire fighting & Physical Training</label>
                                    <span id="message-max" class="text-sm text-warm-gray-500"></span>
                                </div>
                                <div class="mt-1">
                                    <textarea id="training_three" name="training_three" rows="4" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border border-warm-gray-300 rounded-md" aria-describedby="message-max">{{ $basic->value?->training_three }}</textarea>
                                </div>
                            </div>
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
<script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() {
        nicEditors.allTextAreas()
    });
</script>
@endsection