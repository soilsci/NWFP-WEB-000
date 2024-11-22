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

                <x-dropdown2> {{--  --------------------------Drop Down   Get Data   --------------------------------- --}}
                    {{--  anything to do with data  --}}
                    <x-slot name="trigger">
                        {{ __('Get Data') }}
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'data_collection']) }}">
                            {{ __('Data Collection') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'agri_modelling']) }}">
                            {{ __('Agri-modelling') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'metdata-live']) }}">
                            {{ __('Metdata Live') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown2>

                <x-dropdown2>{{--  --------------------------Drop Down Impact  --------------------------------- --}}
                    {{--  anything to do with data  --}}
                    <x-slot name="trigger">
                        {{ __('Impact') }}
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'data_collection']) }}">
                            {{ __('Publications') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'agri_modelling']) }}">
                            {{ __('Agri-modelling') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'metdata-live']) }}">
                            {{ __('Metdata Live') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown2>
                <x-dropdown2>{{--  --------------------------Drop Down Engage  --------------------------------- --}}
                    {{--  anything to do with data  --}}
                    <x-slot name="trigger">
                        {{ __('Engage') }}
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'data_collection']) }}">
                            {{ __('Publications') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'agri_modelling']) }}">
                            {{ __('Agri-modelling') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'metdata-live']) }}">
                            {{ __('Metdata Live') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown2>


                <x-dropdown2>{{--  --------------------------  ABOUT DROPDOWN --------------------------------- --}}
                    {{--  the usual contacts, team, maps and so on  --}}
                    <x-slot name="trigger">
                        {{ __('About') }}
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'index']) }}">
                            {{ __('Content') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'agri_modelling']) }}">
                            {{ __('Agri-modelling') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'facilities']) }}">
                            {{ __('Facilities') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('nw-guides') }}">
                            {{ __('Guides') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'contacts']) }}">
                            {{ __('The Team') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown2>

                {{--  example of If loggged in menu which is obsolete in the present form
                    @if (Route::has('login'))
                    <!-- Extra Linnks when logged in -->
                    @auth
                        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            {{ __('My Platform') }}
                        </x-nav-link>
                    @else
                    @endauth
                    @endif
                --}}


                <x-dropdown2>
                    <x-slot name="trigger">
                        <span
                            class="dark:border-neutral-400 flex items-center whitespace-nowrap px-3 py-[0.25rem] text-nw-blue-700 dark:text-white [&>svg]:h-5 [&>svg]:w-5"
                            id="button-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </span>
                    </x-slot>
                    <x-slot name="content">
                        <div class="justify-middle flex">
                            <x-input class="ml-2 mt-1 block w-full" id="examplesearch" type="search"
                                placeholder="Search" />
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
                </x-dropdown2>
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

            <x-responsive-nav-link href="{{ route('content.with.page', ['page' => 'index']) }}" :active="request()->routeIs('content')">
                {{ __('Area 2') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('content.with.page', ['page' => 'index']) }}" :active="request()->routeIs('content')">
                {{ __('Area 3') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('content.with.page', ['page' => 'index']) }}" :active="request()->routeIs('content')">
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
{{--  This is an ecxample of link without drop down
                <x-nav-link href="{{ route('content.with.page', ['page' => 'data_collection']) }}" :active="request()->routeIs('data_collection')">
                    {{ __('Get Data') }}
                </x-nav-link> --}}

                {{--  --------------------------  Impact  DROPDOWN --------------------------------- --}}
                {{--  anything to do with Impact - results, papers, news, and so on --}}
</nav>
