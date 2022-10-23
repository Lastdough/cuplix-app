<nav x-data="{ open: false }" class=" bg-transparent ">
    {{-- border-b border-gray-100 --}}
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 flex-row h-16">
        <div class="flex  items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <ul class="flex flex-row px-4">
                    <li>
                        <span class="inline-flex items-center text-xl font-medium leading-5 text-black">
                            <a href="" class="block py-2 px-4">Movies</a>
                        </span>
                    </li>
                    <li>
                        <span class="inline-flex items-center text-xl font-medium leading-5 text-black">
                            <a href="" class="block py-2 px-4">TV Series</a>
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Navigation Links -->
            {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Movies') }}
                </x-jet-nav-link>

                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('TV Series') }}
                </x-jet-nav-link>
            </div> --}}
            <div class="flex ">
                <div class="relative hidden md:block">
                    <div class="flex absolute inset-y-0 right-0 items-center pr-4 pointer-events-none">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.2383 11H12.4411L12.1586 10.73C13.1475 9.59 13.7428 8.11 13.7428 6.5C13.7428 2.91 10.8064 0 7.18379 0C3.56118 0 0.624756 2.91 0.624756 6.5C0.624756 10.09 3.56118 13 7.18379 13C8.80841 13 10.3018 12.41 11.4522 11.43L11.7247 11.71V12.5L16.7701 17.49L18.2736 16L13.2383 11ZM7.18379 11C4.67117 11 2.64292 8.99 2.64292 6.5C2.64292 4.01 4.67117 2 7.18379 2C9.6964 2 11.7247 4.01 11.7247 6.5C11.7247 8.99 9.6964 11 7.18379 11Z"
                                fill="#DBDBDB" />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block p-2 pl-5 text-db3 w-80  bg-bluePri rounded-full focus:ring-db3 focus:border-db3"
                        placeholder="Search...">
                    {{-- <input type="text" id="search-navbar"
                        class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..."> --}}
                </div>
                <div class="hidden sm:flex sm:items-center ">
                    {{-- sm:ml-6 --}}
                    <!-- Settings Dropdown -->
                    <div class="relative ml-6">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-10 w-10 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>