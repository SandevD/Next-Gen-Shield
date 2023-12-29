@extends('layouts.master')

@section('content')
<!--aboutus-->
<section id="aboutus" class="bg-dark">
    <!-- Testimonial/stats section -->
    <div class="relative">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
            <div class="relative sm:py-16 lg:py-0">
                <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                    <div class="absolute inset-y-0 right-1/2 w-full bg-stone-800  rounded-r-3xl lg:right-72"></div>
                    <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404" height="392" fill="none" viewBox="0 0 404 392">
                        <defs>
                            <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-blue-500" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)" />
                            </pattern>
                        </defs>
                        <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
                    </svg>
                </div>
                <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                    <!-- Testimonial card-->
                    <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover" src="/assets/img/sg.jpg" alt="">
                        <div class="absolute inset-0 bg-{{ $basic->value?->colour }}-400 mix-blend-multiply"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-{{ $basic->value?->colour }}-700 via-{{ $basic->value?->colour }}-600 opacity-90"></div>
                        <div class="relative px-8">
                            <div>
                                <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl ">
                                    <span class="block xl:inline">NextGenShield</span>
                                    <!-- space -->
                                </h1>
                            </div>
                            <blockquote class="mt-8">
                                <div class="relative text-lg font-medium text-white md:flex-grow">
                                    <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-rose-400" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                        <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                    </svg>
                                    <p class="relative">Tincidunt integer commodo, cursus etiam aliquam neque, et. Consectetur pretium in volutpat, diam. Montes, magna cursus nulla feugiat dignissim id lobortis amet.</p>
                                </div>

                                <footer class="mt-4">
                                    <p class="text-base font-semibold text-{{ $basic->value?->colour }}-200">Sarah Williams, CEO at Workcation</p>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                <!-- Content area -->
                <div class="pt-12 sm:pt-16 lg:pt-20">
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
                                <a href="{{ route('aboutus.index') }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">About Us</a>
                            </div>
                        </li>
                    </ol>
                    <h2 class="text-3xl mt-2 text-gray-900 font-extrabold tracking-tight sm:text-4xl"><span class="txt-rotate" data-period="2000" data-rotate='[ "ABOUT US" ]'></span></h2>
                    <div class="mt-6 text-gray-500 space-y-6">
                        <p class="text-lg">{!! $contents->where('type', 'basic')?->first()?->value?->about_one ?? '(Currently Unavailable...)' !!}</p>
                        <p class="text-base leading-7">{!! $contents->where('type', 'basic')?->first()?->value?->about_two ?? '(Currently Unavailable...)' !!}</p>
                        <p class="text-base leading-7">{!! $contents->where('type', 'basic')?->first()?->value?->about_third ?? '(Currently Unavailable...)' !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Clientele-->
<section class="pt-20">
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <p class="text-center text-base font-semibold uppercase text-gray-600 tracking-wider">Serving our clients is a privilege and responsibility that we do not take lightly.</p>
            <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
                <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                    <img class="max-h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Workcation">
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                    <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                    <img class="max-h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                    <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                    <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                    <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg" alt="Statamic">
                </div>
            </div>
        </div>
    </div>
</section>
<!--VissionMission-->
<section>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-white pt-16 pb-20 overflow-hidden">
        <div class="relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                    <div>
                        <div>
                            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-r from-{{ $basic->value?->colour }}-900 to-{{ $basic->value?->colour }}-400">
                                <!-- Heroicon name: outline/inbox -->
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">OUR MISSION</h2>
                            <p class="mt-4 text-lg text-gray-500"><p class="text-lg">{!! $contents->where('type', 'basic')?->first()?->value?->mission ?? '(Currently Unavailable...)' !!}</p></p>
                            <div class="mt-6">
                                <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-{{ $basic->value?->colour }}-500 hover:bg-{{ $basic->value?->colour }}-700">What we offer</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 border-t border-gray-200 pt-6">
                        <blockquote>
                            <div>
                                <p class="text-base text-gray-500">&ldquo;Cras velit quis eros eget rhoncus lacus ultrices sed diam. Sit orci risus aenean curabitur donec aliquet. Mi venenatis in euismod ut.&rdquo;</p>
                            </div>
                            <footer class="mt-3">
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0">
                                        <img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                    </div>
                                    <div class="text-base font-medium text-gray-700">Marcia Hill, Digital Marketing Manager</div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="pl-5 mr-5 sm:-mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                        <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="/assets/img/{{ $mission_img['image_four'] }}" alt="Inbox user interface">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-24">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                    <div>
                        <div>
                            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-r from-{{ $basic->value?->colour }}-900 to-{{ $basic->value?->colour }}-400">
                                <!-- Heroicon name: outline/sparkles -->
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">OUR VISION</h2>
                            <p class="mt-4 text-lg text-gray-500"><p class="text-lg">{!! $contents->where('type', 'basic')?->first()?->value?->vission ?? '(Currently Unavailable...)' !!}</p></p>
                            <div class="mt-6">
                                <a href="#" class="transition-all inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-{{ $basic->value?->colour }}-600 hover:bg-{{ $basic->value?->colour }}-900"> Contact Us </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                    <div class="pr-5 ml-5 sm:-ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                        <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="/assets/img/{{ $vission_img['image_five'] }}" alt="Customer profile user interface">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection