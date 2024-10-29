<nav class="border-b-8 border-b-nw-blue-600 bg-nw-blue-50" x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex h-20 justify-between">

            <!-- Logo - click on LOGO - GO Home-->
            <div class="flex shrink-0 items-center">
                <a href="{{ route('home') }}">
                    <x-application-logo class="block h-12" />
                </a>
            </div>
            <!-- Navigation Links in the middle-->
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="{{ route('data_collection') }}" :active="request()->routeIs('data_collection')">
                    {{ __('Get Data') }}
                </x-nav-link>
                <x-nav-link href="{{ route('key_findings') }}" :active="request()->routeIs('key_findings')">
                    {{ __('Impact') }}
                </x-nav-link>
                <x-nav-link href="{{ route('content') }}" :active="request()->routeIs('content')">
                    {{ __('Engage') }}
                </x-nav-link>

                <x-dropdown2>
                    <x-slot name="trigger">
                        {{ __('About') }}
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('content') }}">
                            {{ __('Content') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('agri_modelling') }}">
                            {{ __('Agri-modelling') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('facilities') }}">
                            {{ __('Facilities') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('guides') }}">
                            {{ __('Guides') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('contacts') }}">
                            {{ __('The Team') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown2>


                @if (Route::has('login'))
                    <!-- Extra Linnks when logged in -->
                    @auth
                        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            {{ __('My Platform') }}
                        </x-nav-link>
                    @else
                    @endauth
                @endif
            </div>

            <!-- Right Side: search and logged area -->
            <div class="hidden space-x-8 sm:ms-6 sm:flex sm:items-center">

                <div class="relative flex">
                    <x-dropdown align="right" width="70">
                        <x-slot name="trigger">
                            <span
                                class="dark:border-neutral-400 flex items-center whitespace-nowrap px-3 py-[0.25rem] text-nw-blue-700 dark:text-white [&>svg]:h-5 [&>svg]:w-5"
                                id="button-addon2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </span>
                        </x-slot>
                        <x-slot name="content">
                            <div class="flex justify-middle">
                            <x-input class="ml-2 mt-1 block w-full" id="examplesearch" type="search" placeholder="Search" />
                            <span
                                class="dark:border-neutral-400 flex items-center whitespace-nowrap px-3 py-[0.25rem] text-nw-blue-700 dark:text-white [&>svg]:h-5 [&>svg]:w-5"
                                id="button-addon2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </span>
                            </div>
                        </x-slot>
                    </x-dropdown>

                </div>

                @if (Route::has('login'))

                    @auth

                        <div class="relative ms-3">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button
                                            class="flex rounded-full border-2 border-transparent text-sm transition focus:border-nw-blue-200 focus:outline-none">

                                            <img class="aspect-square h-16 rounded-full border-4 border-nw-blue-600 object-scale-down p-1"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />

                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button
                                                class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:bg-gray-50 focus:outline-none active:bg-gray-50"
                                                type="button">
                                                {{ Auth::user()->name }}

                                                <svg class="-me-0.5 ms-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link href="{{ route('dashboard') }}">
                                        {{ __('My Platform') }}
                                    </x-dropdown-link>
                                    <!-- Account Management
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Manage Account') }}
                                            </div>
                                        -->

                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-dropdown-link>
                                    @endif
                                    <div class="border-t border-nw-blue-700"></div>
                                    <x-dropdown-link href="{{ env('FILAMENT_PATH') }}">
                                        {{ __('Admin') }}
                                    </x-dropdown-link>

                                    <div class="border-t border-nw-blue-700"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @else
                        <x-button-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                            {{ __('Log in') }}
                            </x-button>
                            <x-button-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                                {{ __('Register') }}
                            </x-button-link>

                        @endauth

                @endif
                <!-- Settings Dropdown -->

            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none"
                    @click="open = ! open">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" :class="{ 'hidden': open, 'inline-flex': !open }"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path class="hidden" :class="{ 'hidden': !open, 'inline-flex': open }" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div class="hidden sm:hidden" :class="{ 'block': open, 'hidden': !open }">
        <div class="space-y-1 pb-3 pt-2">
            <div class="relative flex border-b border-gray-200 py-2">
                <x-input class="mt-1 block w-full" id="examplesearch" type="search" placeholder="Search" />

                <span
                    class="dark:border-neutral-400 flex items-center whitespace-nowrap px-3 py-[0.25rem] text-nw-blue-700 dark:text-white [&>svg]:h-5 [&>svg]:w-5"
                    id="button-addon2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </span>
            </div>
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ route('content') }}" :active="request()->routeIs('content')">
                {{ __('Area 2') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('content') }}" :active="request()->routeIs('content')">
                {{ __('Area 3') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('content') }}" :active="request()->routeIs('content')">
                {{ __('Area 4') }}
            </x-responsive-nav-link>
        </div>
        @if (Route::has('login'))
            <div class="space-y-1 pb-3 pt-2">
                <div class="border-t border-gray-200 pb-1 pt-4">
                    @auth
                        <!-- Responsive Settings Options -->

                        <!-- Account Management -->
                        <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                {{ __('API Tokens') }}
                            </x-responsive-nav-link>
                        @endif
                        <x-responsive-nav-link href="{{ env('FILAMENT_PATH') }}">
                            {{ __('Admin') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    @else
                        <x-responsive-nav-link href="{{ route('login') }}">
                            Log in
                        </x-responsive-nav-link>

                        @if (Route::has('register'))
                            <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                                {{ __('Register') }}
                            </x-responsive-nav-link>
                        @endif

                    @endauth
                </div>
            </div>
        @endif
    </div>

</nav>
