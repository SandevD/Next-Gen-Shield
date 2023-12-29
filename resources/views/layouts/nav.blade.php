<section class="hidden md:block bg-white z-50">
    <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-end space-x-6 md:order-2">
            @if (auth()->check())
            <a href="#" class="text-gray-400 hover:text-gray-500" onclick="logoutForm.submit()">Logout &#10162;</a>
            <form action="{{ route('logout') }}" id="logoutForm" method="POST">
                @csrf
            </form>
            @else
            <a href="{!! $socials->value?->flink ?? '(Currently Unavailable...)' !!}" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                </svg>
            </a>

            <a href="{!! $socials->value?->ilink ?? '(Currently Unavailable...)' !!}" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                </svg>
            </a>

            <a href="{{ route('welcome.index') }}" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Dribbble</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z" />
                </svg>
            </a>
            @endif
        </div>
        <div class="mt-8 md:mt-0 md:order-1">
            @if (auth()->check())
            <p class="text-center text-base text-gray-400">Logged In <span class="text-{!! $basic->value?->colour !!}-700">{{ auth()->user()->email }}</span> </p>
            @else
            <p class="text-center text-base text-gray-400">{!! $contents->where('type', 'basic')?->first()?->value?->address ?? '(Currently Unavailable...)' !!} </p>
            @endif
        </div>
    </div>
</section>
<section class="sticky z-50 top-0 nav opacity-100 shadow" id="top">
    <div class="">
        <div class="relative bg-white ">
            <div id="logo" class="relative bg-white" x-data="Components.popover({ open: false, focus: true })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                <div class="max-w-7xl mx-auto px-4 sm:px-6">
                    <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                        <div class="flex justify-start lg:w-0 lg:flex-1">
                            <a href="#">
                                <span class="sr-only">Workflow</span>
                                <img class="h-12 w-auto sm:h-20 animlogo" src="/assets/img/logo.png" alt="">
                            </a>
                        </div>
                        <div class="-mr-2 -my-2 md:hidden">
                            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none " @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                                <span class="sr-only">Open menu</span>
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                        <nav class="hidden md:flex space-x-10" x-data="Components.popoverGroup()" x-init="init()">

                            <a href="{{ route('welcome.index') }}" class="{{ menuActiveMain('welcome.index') }} text-base font-medium text-gray-500 duration-500 underline-right ">
                                Home
                            </a>
                            @if (auth()->check())
                            <a href="{{ route('dashboard.index') }}" class="{{ menuActiveMain('dashboard.index') }} text-base font-medium text-gray-500 hover:text-gray-900 duration-500 ">
                                Dashboard
                            </a>
                            @endif
                            <a href="{{ route('aboutus.index') }}" class="{{ menuActiveMain('aboutus.index') }} text-base font-medium text-gray-500 hover:text-gray-900 duration-500 ">
                                About Us
                            </a>
                            <a href="{{ route('whatweoffer.index') }}" class="{{ menuActiveMain('whatweoffer.index') }} text-base font-medium text-gray-500 hover:text-gray-900 duration-500 ">
                                What we offer
                            </a>

                            <div class="relative" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                                <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none" :class="{ 'text-gray-900': open, 'text-gray-500': !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                                    <span>More</span>
                                    <svg x-state:on="Item active" x-state:off="Item inactive" class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" :class="{ 'text-gray-600': open, 'text-gray-400': !(open) }" x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>


                                <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" x-description="'More' flyout menu, show/hide based on flyout menu state." class="absolute left-1/2 z-10 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0" x-ref="panel" @click.away="open = false">
                                    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                        <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">

                                            <a href="{{ route('training.index') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                                <svg class="flex-shrink-0 h-6 w-6 text-{!! $basic->value?->colour !!}-600" x-description="Heroicon name: outline/calendar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                                <div class="ml-4">
                                                    <p class="text-base font-medium text-gray-900">
                                                        Training
                                                    </p>
                                                    <p class="mt-1 text-sm text-gray-500">
                                                        Programs for security division
                                                    </p>
                                                </div>
                                            </a>

                                            <a href="{{ route('contactus.index') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                                <svg class="flex-shrink-0 h-6 w-6 text-{!! $basic->value?->colour !!}-600" x-description="Heroicon name: outline/support" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                                </svg>
                                                <div class="ml-4">
                                                    <p class="text-base font-medium text-gray-900">
                                                        Contact Us
                                                    </p>
                                                    <p class="mt-1 text-sm text-gray-500">
                                                        Get all of your questions answered in our forums or contact support.
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <!--<div class="px-5 py-5 bg-gray-50 sm:px-8 sm:py-8">
                                                <div>
                                                    <h3 class="text-sm tracking-wide font-medium text-gray-500 uppercase">
                                                        Recent Updates
                                                    </h3>
                                                    <ul role="list" class="mt-4 space-y-4">

                                                        <li class="text-base truncate">
                                                            <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                                                Boost your conversion rate
                                                            </a>
                                                        </li>

                                                        <li class="text-base truncate">
                                                            <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                                                How to use search engine optimization to drive traffic to your site
                                                            </a>
                                                        </li>

                                                        <li class="text-base truncate">
                                                            <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                                                Improve your customer experience
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="mt-5 text-sm">
                                                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all posts <span aria-hidden="true">&rarr;</span></a>
                                                </div>
                                            </div>-->
                                    </div>
                                </div>

                            </div>
                        </nav>
                    </div>
                </div>


                <div x-show="open" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-description="Mobile menu, show/hide based on mobile menu state." class="absolute top-0 inset-x-0 z-10 p-2 transition transform origin-top-right md:hidden" x-ref="panel" @click.away="open = false">
                    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                        <div class="pt-5 pb-6 px-5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <img class="h-12 w-auto animlogo" src="/assets/img/logo.png" alt="Workflow">
                                </div>
                                <div class="-mr-2">
                                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none" @click="toggle">
                                        <span class="sr-only">Close menu</span>
                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="mt-6">
                                <nav class="grid gap-y-8">

                                    <a href="{{ route('welcome.index') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                        <svg class="flex-shrink-0 h-6 w-6 text-sky-600" x-description="Heroicon name: outline/chart-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                        <span class="ml-3 text-base font-medium text-gray-900">
                                            Home
                                        </span>
                                    </a>

                                    @if (auth()->check())
                                    <a href="{{ route('dashboard.index') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                        <svg class="flex-shrink-0 h-6 w-6 text-sky-600" x-description="Heroicon name: outline/view-grid" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                        </svg>
                                        <span class="ml-3 text-base font-medium text-gray-900">
                                            Dashboard
                                        </span>
                                    </a>
                                    @endif

                                    <a href="{{ route('aboutus.index') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                        <svg class="flex-shrink-0 h-6 w-6 text-sky-600" x-description="Heroicon name: outline/cursor-click" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                                        </svg>
                                        <span class="ml-3 text-base font-medium text-gray-900">
                                            About Us
                                        </span>
                                    </a>

                                    <a href="{{ route('whatweoffer.index') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                        <svg class="flex-shrink-0 h-6 w-6 text-sky-600" x-description="Heroicon name: outline/shield-check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                        </svg>
                                        <span class="ml-3 text-base font-medium text-gray-900">
                                            What we offer
                                        </span>
                                    </a>

                                    <a href="{{ route('training.index') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                        <svg class="flex-shrink-0 h-6 w-6 text-sky-600" x-description="Heroicon name: outline/view-grid" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                        </svg>
                                        <span class="ml-3 text-base font-medium text-gray-900">
                                            Training
                                        </span>
                                    </a>
                                </nav>
                            </div>
                        </div>
                        <div class="py-6 px-5 space-y-6">
                            <div>
                                @if (auth()->check())
                                <p class="text-center text-base text-gray-400">Logged In <span class="text-sky-700">{{ auth()->user()->email }}</span> </p>
                                @else
                                <p class="text-center text-base font-medium text-gray-500">
                                    Any inquiries ?
                                    <a href="{{ route('contactus.index') }}" class="text-sky-600 hover:text-indigo-500">
                                        Contact Us
                                    </a>
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>