@extends('layouts.master')

@section('content')
<!--Whatweoffer-->
<section>
    <!-- Feature section with grid -->
    <div class="relative bg-white py-16 sm:py-24">
        <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <h2 class="text-base font-semibold tracking-wider text-{!! $basic->value?->colour !!}-600 uppercase">NextGenShield</h2>
            <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl"><span class="txt-rotate" data-period="2000" data-rotate='[ "WHAT WE OFFER" ]'></span></p>
            <div class="mt-24">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($service as $service)
                    <div class="flex pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8 grow shrink basic-80">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-{!! $basic->value?->colour !!}-500 to-{!! $basic->value?->colour !!}-600 rounded-md shadow-lg text-white">
                                        <!-- Heroicon name: outline/cloud-upload -->
                                        {!!$service->value->icon!!}
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">{{$service->value->one}}</h3>
                                <p class="mt-5 text-base text-gray-500">{{$service->value->desc_one}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pt-16 lg:py-24">
        <div class="pb-16 bg-{!! $basic->value?->colour !!}-600 lg:pb-0 lg:z-10 lg:relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
                <div class="relative lg:-my-8">
                    <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                        <div class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                            <img class="object-cover lg:h-full lg:w-full" src="/assets/img/{{ $service_img['image_six'] }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                    <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                        <blockquote>
                            <div>
                                <svg class="h-12 w-12 text-white opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                </svg>
                                <p class="mt-6 text-2xl font-medium text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.</p>
                            </div>
                            <footer class="mt-6">
                                <p class="text-base font-medium text-white">Judith Black</p>
                                <p class="text-base font-medium text-{!! $basic->value?->colour !!}-100">CEO at PureInsights</p>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection