@extends('layouts.master')

@section('content')
<style>
    :root {
        --stone: #475569;
        --amber: #d97706;
        --lime: #65a30d;
        --green: #22c55e;
        --teal: #0d9488;
        --sky: #0284c7;
        --violet: #7c3aed;
        --fuchsia: #c026d3;
        --rose: #e11d48;
    }

    .nxshead {
        position: relative;
        text-transform: uppercase;
    }

    .nxshead::before {
        content: attr(data-text);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        color: var(--{{ $basic->value?->colour }});
        border-right: 2px solid var(--{{ $basic->value?->colour }});
        overflow: hidden;
        animation: animate 6s linear infinite;
    }

    @keyframes animate {

        0%,
        10%,
        100% {
            width: 23%;
        }

        70%,
        90% {
            width: 70%;
        }
    }

    @media (max-width: 480px) {
        .nxshead::before {
            animation: animateanimate 6s linear infinite;
        }

        @keyframes animateanimate {

            0%,
            10%,
            100% {
                width: 0%;
            }

            70%,
            90% {
                width: 85%;
            }
        }
    }
</style>
<div class="circle gelatine"></div>
<!--landing-->
<section id="home" class="h-full">
    <div class="overflow-hidden lg:relative lg:py-20">
        <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24">
            <div>
                <div class="mt-10">
                    <div>
                        <a href="{{ route('contactus.index') }}" class="inline-flex space-x-4">
                            <span class="rounded bg-{!! $basic->value?->colour !!}-50 px-2.5 py-1 text-xs font-semibold text-{!! $basic->value?->colour !!}-500 tracking-wide uppercase"> WELCOME </span>
                            <span class="inline-flex items-center text-sm font-medium text-{!! $basic->value?->colour !!}-500 space-x-1">
                                Contact Us
                                <!-- Heroicon name: solid/chevron-right -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="mt-6 sm:max-w-xl">
                        <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl nxshead" data-text="NEXTGENSHIELD">NEXTGENSHIELD</h1>
                        <p class="mt-6 text-xl text-gray-400">With customised security services, our aim is to develop long-term strategic partnerships with our customers.</p>
                        <p class="mt-6 text-xl text-gray-400">With an extensive range of security systems and products, we can help businesses reach their security objectives by increasing their revenues, reducing the costs of managing risk, protecting critical assets or improving service delivery to customers.</p>
                    </div>
                    <!--<form action="#" class="mt-12 sm:max-w-lg sm:w-full sm:flex">
                            <div class="min-w-0 flex-1">
                                <label for="hero-email" class="sr-only">Email address</label>
                                <input id="hero-email" type="email" class="block w-full border border-gray-300 rounded-md px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-rose-500 focus:ring-rose-500" placeholder="Enter your email">
                            </div>
                            <div class="mt-4 sm:mt-0 sm:ml-3">
                                <button type="submit" class="block w-full rounded-md border border-transparent px-5 py-3 bg-rose-500 text-base font-medium text-white shadow hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 sm:px-10">Notify me</button>
                            </div>
                        </form>-->
                </div>
            </div>
        </div>

        <div class="sm:mx-auto sm:max-w-3xl sm:px-6">
            <div class="py-12 sm:relative sm:mt-12 sm:py-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <div class="hidden sm:block">
                    <div class="absolute inset-y-0 left-1/2 w-screen bg-gray-900 rounded-l-3xl lg:left-80 lg:right-0 lg:w-full"></div>
                    <svg class="absolute top-8 right-1/2 -mr-3 lg:m-0 lg:left-0" width="404" height="392" fill="none" viewBox="0 0 404 392">
                        <defs>
                            <pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-{!! $basic->value?->colour !!}-500" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="392" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)" />
                    </svg>
                </div>
                <div class="relative pl-5 sm:pl-4 mr-5 sm:-mr-40 sm:mx-auto sm:max-w-3xl sm:px-0 lg:max-w-none lg:h-full lg:pl-12">
                    <img class="w-full rounded-md shadow-xl ring-1 ring-black ring-opacity-5 lg:h-full lg:w-auto lg:max-w-none" src="/assets/img/{{ $main_img['image_one'] }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="lg:max-w-7xl lg:mx-auto py-8 px-4 lg:py-16">
        <div class="lg:max-w-7xl lg:mx-auto py-2 px-4 md:px-2 md:flex md:items-center md:justify-center">
            <ul role="list" class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <li class="col-span-1 flex shadow-sm rounded-md">
                    <div class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
                        <a href="{!! $socials->value?->ilink ?? '(Currently Unavailable...)' !!}">
                            <svg class="h-6 w-6 hithere" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                        <div class="flex-1 px-4 py-2 text-sm truncate">
                            <a href="{!! $socials->value?->ilink ?? '(Currently Unavailable...)' !!}" class="text-gray-900 font-medium hover:text-gray-600">Instagram</a>
                            <a href="{!! $socials->value?->ilink ?? '(Currently Unavailable...)' !!}">
                                <p class="text-gray-500">{!! $socials->value?->instagram ?? '(Currently Unavailable...)' !!}</p>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="col-span-1 flex shadow-sm rounded-md animate-bounce">
                    <div class="flex-shrink-0 flex items-center justify-center w-16 bg-sky-600 text-white text-sm font-medium rounded-l-md">
                        <a href="{!! $socials->value?->flink ?? '(Currently Unavailable...)' !!}">
                            <svg class="w-7 h-7 bounceanim" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                        <div class="flex-1 px-4 py-2 text-sm truncate">
                            <a href="{!! $socials->value?->flink ?? '(Currently Unavailable...)' !!}" class="text-gray-900 font-medium hover:text-gray-600">Facebook</a>
                            <a href="{!! $socials->value?->flink ?? '(Currently Unavailable...)' !!}">
                                <p class="text-gray-500">{!! $socials->value?->facebook ?? '(Currently Unavailable...)' !!}</p>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="col-span-1 flex shadow-sm rounded-md">
                    <div class="flex-shrink-0 flex items-center justify-center w-16 bg-purple-500 text-white text-sm font-medium rounded-l-md">
                        <svg class="flex-shrink-0 w-6 h-6 text-white hithere" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                        <div class="flex-1 px-4 py-2 text-sm truncate">
                            <a href="" class="text-gray-900 font-medium hover:text-gray-600">Email</a>
                            <p class="text-gray-500">{!! $contents->where('type', 'basic')?->first()?->value?->email ?? '(Currently Unavailable...)' !!}</p>
                        </div>
                    </div>
                </li>

                <li class="col-span-1 flex shadow-sm rounded-md">
                    <div class="flex-shrink-0 flex items-center justify-center w-16 bg-green-500 text-white text-sm font-medium rounded-l-md">
                        <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px" class="hithere">
                            <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z" />
                        </svg>
                    </div>
                    <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                        <div class="flex-1 px-4 py-2 text-sm truncate">
                            <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Whatsapp</a>
                            <p class="text-gray-500">+94 {!! $contents->where('type', 'basic')?->first()?->value?->phone ?? '(Currently Unavailable...)' !!} ( Hotline )</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<!--aboutus-->
<section id="aboutus" class="bg-dark">
    <!-- Testimonial/stats section -->
    <div class="relative mt-10 md:mt-20">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
            <div class="relative sm:py-16 lg:py-0">
                <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                    <div class="absolute inset-y-0 right-1/2 w-full bg-stone-800  rounded-r-3xl lg:right-72"></div>
                    <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404" height="392" fill="none" viewBox="0 0 404 392">
                        <defs>
                            <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-{!! $basic->value?->colour !!}-500" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)" />
                            </pattern>
                        </defs>
                        <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
                    </svg>
                </div>
                <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                    <!-- Testimonial card-->
                    <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover" src="/assets/img/{{ $about_img['image_two'] }}" alt="">
                        <div class="absolute inset-0 bg-{!! $basic->value?->colour !!}-400 mix-blend-multiply"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-{!! $basic->value?->colour !!}-900 via-{!! $basic->value?->colour !!}-600 opacity-90"></div>
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
                                    <p class="relative">Next Gen Shield (Private) Ltd is proud to have an impressive clientele in various sectors.</p>
                                </div>

                                <footer class="mt-4">
                                    <a href="{{ route('aboutus.index') }}" <span class="rounded bg-{!! $basic->value?->colour !!}-50 px-2.5 py-1 text-xs font-semibold text-{!! $basic->value?->colour !!}-500 tracking-wide uppercase"> READ MORE </span></a>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                <!-- Content area -->
                <div class="pt-12 sm:pt-16 lg:pt-20">
                    <h2 class="text-3xl text-gray-900 font-extrabold tracking-tight sm:text-4xl animate-pulse">ABOUT US</h2>
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
<!--<section id="logo">
    <div class="bg-white pt-10">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <p class="text-center text-sm font-semibold uppercase text-gray-500 tracking-wide"></p>
            <div class="mt-6 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                    <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                </div>
                <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                    <img class="h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
                </div>
                <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                    <img class="h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                </div>
                <div class="col-span-1 flex justify-center md:col-span-2 md:col-start-2 lg:col-span-1">
                    <img class="h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor">
                </div>
                <div class="col-span-2 flex justify-center md:col-span-2 md:col-start-4 lg:col-span-1">
                    <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation">
                </div>
            </div>
        </div>
    </div>
</section>-->
<section class="pt-20">
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <p class="text-center text-base font-semibold uppercase text-gray-600 tracking-wider">Serving our clients is a privilege and responsibility that we do not take lightly</p>
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
<!--training-->
<section class="pt-10">
    <!-- CTA Section -->
    <div class="relative bg-gray-900">
        <div class="relative h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
            <img class="w-full h-full object-cover" src="/assets/img/{{ $ww_img['image_three'] }}" alt="">
            <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-r from-{!! $basic->value?->colour !!}-500 to-{!! $basic->value?->colour !!}-600 mix-blend-multiply"></div>
        </div>
        <div class="relative mx-auto max-w-md px-4 py-12 sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:py-32">
            <div class="md:ml-auto md:w-1/2 md:pl-10">
                <h2 class="text-base font-semibold uppercase tracking-wider text-gray-300">NEXTGENSHIELD Training</h2>
                <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">We’re here to help</p>
                <p class="mt-3 text-lg text-gray-300">The main Training Programs for Security Division must be done with the 3 principle units. The Units are as follows;</p>
                <p class="mt-3 text-lg text-gray-300">1. Basic Security Training</p>
                <p class="mt-3 text-lg text-gray-300">2. English Language Skill</p>
                <p class="mt-3 text-lg text-gray-300">3. Fire fighting and physical training</p>
                <div class="mt-8">
                    <div class="inline-flex rounded-md shadow">
                        <a href="{{ route('training.index') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
                            Checkout Course Contents
                            <!-- Heroicon name: solid/external-link -->
                            <svg class="-mr-1 ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection