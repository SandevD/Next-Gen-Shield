@extends('layouts.master')

@section('content')
<div class="bg-white overflow-hidden">
    <div class="relative max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="hidden lg:block bg-gray-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
        <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
            <div>
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div>
                            <a href="{{ route('welcome.index') }}" class="text-gray-400 hover:text-gray-500">
                                <!-- Heroicon name: solid/home -->
                                <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                <span class="sr-only">Home</span>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center">
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                            <a href="{{ route('training.index') }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">Training</a>
                        </div>
                    </li>
                </ol>
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl"><span class="txt-rotate" data-period="2000" data-rotate='[ "TRAINING" ]'></span></h3>
            </div>
        </div>
        <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
            <div class="relative lg:row-start-1 lg:col-start-2">
                <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                    <defs>
                        <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-{!! $basic->value?->colour !!}-700" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
                </svg>
                <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
                    <figure>
                        <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                            <img class="rounded-lg shadow-lg object-cover object-center" src="/assets/img/{{ $training_img['image_seven'] }}" alt="not available" width="1080" height="720">
                        </div>
                    </figure>
                </div>
            </div>
            <div class="mt-8 lg:mt-0">
                <div class="text-base max-w-prose mx-auto lg:max-w-none">
                    <p class="text-lg text-gray-500">The main Training Programs for Security Division must be done with the 3 principle units. The Units are as follows;</p>
                </div>
                <div class="mt-5 prose prose-indigo text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
                    <ul role="list">
                        <li>Basic Security Training.</li>
                        <li>English Language Skill.</li>
                        <li>Fire fighting and physical training.</li>
                    </ul>
                </div>
                <div class="text-base max-w-prose mx-auto lg:max-w-none mt-5">
                    <p class="text-lg text-gray-500">Evaluation of course</p>
                </div>
                <div class="mt-5 prose prose-indigo text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
                    <p>Lyceum Assessments to cover these training areas and a certificate will be issued on the completion of them.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div>
                <h2 class="text-1xl sm:text-2xl text-center md:text-left font-extrabold text-gray-900 uppercase">Important Elements of Basic Security Training</h2>
                <p class="mt-4 text-lg text-gray-500"><a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"></a></p>
            </div>
            <div class="mt-12 lg:mt-0 lg:col-span-2 space-y-8 px-7 text-1xl">
                {!! $contents->where('type', 'basic')?->first()?->value?->training_one ?? '(Currently Unavailable...)' !!}
            </div>
        </div>
    </div>
</div>
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div>
                <h2 class="text-1xl sm:text-2xl text-center md:text-left font-extrabold text-gray-900 uppercase">Important Elements of English Language Skill</h2>
                <p class="mt-4 text-lg text-gray-500"><a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"></a></p>
            </div>
            <div class="mt-12 lg:mt-0 lg:col-span-2 px-7">
                {!! $contents->where('type', 'basic')?->first()?->value?->training_two ?? '(Currently Unavailable...)' !!}
            </div>
        </div>
    </div>
</div>
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div>
                <h2 class="text-1xl sm:text-2xl text-center md:text-left font-extrabold text-gray-900 uppercase">Important Elements of English Language Skill</h2>
                <p class="mt-4 text-lg text-gray-500"><a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"></a></p>
            </div>
            <div class="mt-12 lg:mt-0 lg:col-span-2 px-7">
                {!! $contents->where('type', 'basic')?->first()?->value?->training_three ?? '(Currently Unavailable...)' !!}
            </div>
        </div>
    </div>
</div>
@endsection