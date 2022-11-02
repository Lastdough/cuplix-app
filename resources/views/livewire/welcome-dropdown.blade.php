<nav x-data="{ open: false }" class=" bg-transparent">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10">
        <div class="flex justify-between items-center">
            <div class="flex">
                <div class="flex items-center">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <x-jet-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>
    
                    {{-- <ul class="flex flex-row px-4">
                        <li>
                            <span class="inline-flex items-center text-xl font-medium leading-5 text-black">
                                <a href="{{route('movies')}}" class="block py-2 px-4">Movies</a>
                            </span>
                        </li>
                        <li>
                            <span class="inline-flex items-center text-xl font-medium leading-5 text-black">
                                <a href="" class="block py-2 px-4">TV Series</a>
                            </span>
                        </li>
                    </ul> --}}
                </div>
            </div>
            @if (Route::has('login'))
            <div class="flex">
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth
                @endif
            </div>
        </div>
    </div>
</nav>