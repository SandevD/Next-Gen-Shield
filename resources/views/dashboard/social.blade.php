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
                        <h2 class="text-3xl mt-2 text-gray-900 font-extrabold tracking-tight sm:text-4xl"><span class="animate-pulse">U</span>PDATE <span class="animate-pulse">S</span>OCIALS</h2>
                        <form action="{{ route('dashboard.social.update') }}" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                            @csrf
                            <div>
                                <label for="facebook" class="block text-sm font-medium text-warm-gray-900">Facebook Name</label>
                                <div class="mt-1">
                                    <input id="facebook" name="facebook" type="text" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" value="{{ $socials->value?->facebook }}">
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between">
                                    <label for="instagram" class="block text-sm font-medium text-warm-gray-900">Instagram Name</label>
                                </div>
                                <div class="mt-1">
                                    <input type="text" name="instagram" id="instagram" autocomplete="tel" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" value="{{ $socials->value?->instagram }}">
                                </div>
                            </div>
                            <div>
                                <label for="flink" class="block text-sm font-medium text-warm-gray-900">Facebook Link</label>
                                <div class="mt-1">
                                    <input type="text" name="flink" id="flink" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" value="{{ $socials->value?->flink }}">
                                </div>
                            </div>
                            <div>
                                <label for="ilink" class="block text-sm font-medium text-warm-gray-900">Instagram Link</label>
                                <div class="mt-1">
                                    <input type="text" name="ilink" id="ilink" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-{!! $basic->value?->colour !!}-700 focus:border-{!! $basic->value?->colour !!}-800 border-warm-gray-300 rounded-md" value="{{ $socials->value?->ilink }}">
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