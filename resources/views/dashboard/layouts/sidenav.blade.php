<div x-show="open" class="fixed inset-0 flex z-40 md:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true">

    <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-600 bg-opacity-75" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." @click="open = false" aria-hidden="true">
    </div>

    <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gray-800">

        <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Close button, show/hide based on off-canvas menu state." class="absolute top-0 right-0 -mr-12 pt-2">
            <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" @click="open = false">
                <span class="sr-only">Close sidebar</span>
                <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div class="flex-shrink-0 flex items-center px-4">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
        </div>
        <div class="mt-5 flex-1 h-0 overflow-y-auto">
            <nav class="px-2 space-y-1">

                <a href="#" class="bg-gray-900 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-300 mr-4 flex-shrink-0 h-6 w-6" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;text-gray-300&quot;, Default: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Dashboard
                </a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    Team
                </a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Projects
                </a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/calendar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Calendar
                </a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/inbox" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                    </svg>
                    Documents
                </a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/chart-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Reports
                </a>

            </nav>
        </div>
    </div>

    <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
    </div>
</div>


<!-- Static sidebar for desktop -->
<div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex-1 flex flex-col min-h-0 bg-gray-800">
        <a href="{{ route('welcome.index') }}">
            <div class="flex items-center h-16 flex-shrink-0 px-4 bg-gray-900">
                <img class="h-12 w-auto animprelogo" src="/assets/img/logo.png" alt="Workflow">
                <p class="uppercase text-white bold">NEXTGENSHIELD</p>
            </div>
        </a>
        <div class="flex-1 flex flex-col overflow-y-auto">
            <nav class="flex-1 px-2 py-4 space-y-1">
                @if (auth()->check())
                <a href="{{ route('dashboard.index') }}" class="text-gray-300 hover:bg-gray-700 group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ menuActive('dashboard.index') }}">
                    <svg class="text-{!! $basic->value?->colour !!}-700 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Dashboard
                </a>

                <a href="{{ route('dashboard.basic') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ menuActive('dashboard.basic') }}">
                    <svg class="text-{!! $basic->value?->colour !!}-700 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Basic
                </a>

                <a href="{{ route('dashboard.image') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ menuActive('dashboard.image') }}">
                    <svg class="text-{!! $basic->value?->colour !!}-700 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Images
                </a>

                <a href="{{ route('dashboard.service.view') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ menuActive('dashboard.service.view') }}">
                    <svg class="text-{!! $basic->value?->colour !!}-700 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Services
                </a>

                <a href="{{ route('dashboard.social') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ menuActive('dashboard.social') }}">
                    <svg class="text-{!! $basic->value?->colour !!}-700 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Socials
                </a>

                <a href="{{ route('dashboard.password') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ menuActive('dashboard.password') }}">
                    <svg class="text-{!! $basic->value?->colour !!}-700 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                    </svg>
                    Reset Password
                </a>
                @else
                <a href="{{ route('welcome.index') }}" class="text-gray-300 hover:bg-gray-700 group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ menuActive('dashboard.index') }}">
                    <svg class="text-{!! $basic->value?->colour !!}-700 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Home
                </a>
                @endif

                <!--<a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Projects
                </a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/calendar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Calendar
                </a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/inbox" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                    </svg>
                    Documents
                </a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/chart-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Reports
                </a>-->

            </nav>
        </div>
    </div>
</div>