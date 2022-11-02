<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu') }}
        </h2>

    </x-slot> --}}
    <x-slot name="body">
        <div class="max-w-7xl mx-auto py-6 pt-11 px-4 sm:px-6 lg:px-8">
            {{-- carrousel --}}
            <div id="controls-carousel" class="relative" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                        data-carousel-item="">
                        {{-- spider-man no way home --}}
                        <img src="{{ 'https://www.themoviedb.org/t/p/original/bHzfk4LMjbyUTukFrku3vSk25Dl.jpg' }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-1000 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                        data-carousel-item="active">
                        {{-- mandalorian --}}
                        <img src="{{ 'https://www.themoviedb.org/t/p/original/wXDXW4wJnvs5qHEXEZSLtUEzRjX.jpg' }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-1000 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                        data-carousel-item="">
                        {{-- parasite --}}
                        <img src="{{ 'https://image.tmdb.org/t/p/original/yhS4HdgT0szo7ftm0QWGQ8hCtqL.jpg' }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-1000 ease-in-out absolute inset-0 transition-all transform"
                        data-carousel-item="">
                        {{-- thor love and thunder --}}
                        <img src="{{ 'https://image.tmdb.org/t/p/original/6eFDnvpsgPMrxcVnLCM12rBv8Fk.jpg' }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-1000 ease-in-out absolute inset-0 transition-all transform"
                        data-carousel-item="">
                        {{-- goblin --}}
                        <img src="{{ 'https://image.tmdb.org/t/p/original/pO9xXXsoGEb2v63AzbgTsooiKod.jpg' }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev="">
                    <span class="inline-flex items-center justify-center w-10 h-10  ">
                        {{-- <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg> --}}
                        <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_90_1381)">
                                <path
                                    d="M59.64 26.8399C59.2699 26.4691 58.8304 26.1749 58.3465 25.9742C57.8626 25.7735 57.3439 25.6702 56.82 25.6702C56.2961 25.6702 55.7774 25.7735 55.2935 25.9742C54.8096 26.1749 54.37 26.4691 54 26.8399L35.64 45.1999C35.2692 45.57 34.975 46.0096 34.7743 46.4934C34.5735 46.9773 34.4702 47.4961 34.4702 48.0199C34.4702 48.5438 34.5735 49.0625 34.7743 49.5464C34.975 50.0303 35.2692 50.4699 35.64 50.8399L54 69.1999C54.3703 69.5703 54.81 69.864 55.2938 70.0644C55.7777 70.2649 56.2963 70.368 56.82 70.368C57.3437 70.368 57.8623 70.2649 58.3462 70.0644C58.83 69.864 59.2697 69.5703 59.64 69.1999C60.0103 68.8296 60.3041 68.39 60.5045 67.9061C60.7049 67.4223 60.8081 66.9037 60.8081 66.3799C60.8081 65.8562 60.7049 65.3376 60.5045 64.8538C60.3041 64.3699 60.0103 63.9303 59.64 63.5599L44.12 47.9999L59.64 32.4799C61.16 30.9199 61.16 28.3599 59.64 26.8399Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <filter id="filter0_d_90_1381" x="-4" y="0" width="104" height="104"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_90_1381" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_90_1381"
                                        result="shape" />
                                </filter>
                            </defs>
                        </svg>

                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next="">
                    <span class="inline-flex items-center justify-center w-10 h-10">
                        {{-- <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg> --}}
                        <svg viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_90_1383)">
                                <path
                                    d="M37.24 26.8401C36.8692 27.2101 36.575 27.6497 36.3743 28.1336C36.1735 28.6175 36.0702 29.1362 36.0702 29.6601C36.0702 30.184 36.1735 30.7027 36.3743 31.1866C36.575 31.6705 36.8692 32.11 37.24 32.4801L52.76 48.0001L37.24 63.5201C36.4921 64.268 36.0719 65.2824 36.0719 66.3401C36.0719 67.3978 36.4921 68.4122 37.24 69.1601C37.9879 69.908 39.0023 70.3282 40.06 70.3282C41.1177 70.3282 42.1321 69.908 42.88 69.1601L61.24 50.8001C61.6108 50.43 61.905 49.9905 62.1057 49.5066C62.3065 49.0227 62.4098 48.504 62.4098 47.9801C62.4098 47.4562 62.3065 46.9375 62.1057 46.4536C61.905 45.9697 61.6108 45.5301 61.24 45.1601L42.88 26.8001C41.36 25.2801 38.8 25.2801 37.24 26.8401Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <filter id="filter0_d_90_1383" x="-4" y="0" width="104" height="104"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_90_1383" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_90_1383"
                                        result="shape" />
                                </filter>
                            </defs>
                        </svg>

                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="mt-14 bg-pri">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @livewire('dashboard.trending')
                {{-- Load More --}}
                <div class="grid grid-cols-12 pb-14">
                    <div class="col-span-11"></div>
                    <a href="trending">
                        <p class="text-right text-bluePri font-medium text-base hover:text-blueSec">
                            Load More
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('dashboard.new-release')
            {{-- Load More --}}
            <div class="grid grid-cols-12 pb-14">
                <div class="col-span-11"></div>
                <a href="trending">
                    <p class="text-right text-bluePri font-medium text-base hover:text-blueSec">
                        Load More
                    </p>
                </a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('dashboard.movies')
            {{-- Load More --}}
            <div class="grid grid-cols-12 pb-14">
                <div class="col-span-11"></div>
                <a href="movies">
                    <p class="text-right text-bluePri font-medium text-base hover:text-blueSec">
                        Load More
                    </p>
                </a>
            </div>
        </div>
    </x-slot>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
</x-app-layout>