<div class="bg-nw-blue-900 text-nw-blue-50">
    <div class="flex justify-center px-8 py-16">
        <div class="text-left text-sm px-20 overflow-visible ">
            <h2 class="text-2xl font-mono font-semibold">Our sponsors</h2>
            <div class=" bg-white  rounded-full">
                <a href="https://www.rothamsted.ac.uk">
                    <img src="/logos/rothamsted-logo.png" class="block h-12 -p-1 object-fill" />
                </a>
            </div>

            <div>
                <a href="https://www.ukri.org/councils/bbsrc/">
                    <img src="/logos/BBSRC-logo.png" class="block h-16 my-2 p-1 bg-white" />
                </a>
            </div>

        </div>
        <div class="text-left text-sm px-20 overflow-visible ">
            <h2  class="text-2xl font-mono font-semibold">Official Links</h2>

            <p><a class="hover:text-yellow-300 hover:font-semibold hover:shadow-lg active:text-orange-600 active:shadow-lg " href="">Legal Notice</a></p>
            <p><a class="hover:text-yellow-300 hover:font-semibold hover:shadow-lg active:text-orange-600 active:shadow-lg " href="https://www.rothamsted.ac.uk/privacy-and-cookies">Privacy and Cookies</a></p>
            <p><a class="hover:text-yellow-300 hover:font-semibold hover:shadow-lg active:text-orange-600 active:shadow-lg " href="/documents/NWFP Data Access Policy Summary Final 26-2-2016.pdf">Data Access Policy</a></p>
            <p><a class="hover:text-yellow-300 hover:font-semibold hover:shadow-lg active:text-orange-600 active:shadow-lg " href="/documents/Modern-Slavery-Act 2015-2019.pdf">Modern Slavery</a></p>
            <p><a class="hover:text-yellow-300 hover:font-semibold hover:shadow-lg active:text-orange-600 active:shadow-lg " href="">Compassionate Farming</p>

        </div>
        <div class="text-left text-sm px-20 overflow-visible ">
            <h2 class="text-2xl font-mono font-semibold">Connect</h2>
            <p><a class="hover:text-yellow-300 hover:font-semibold hover:shadow-lg active:text-orange-600 active:shadow-lg " href="/contact">Contact us</a></p>
            <p><a class="hover:text-yellow-300 hover:font-semibold hover:shadow-lg active:text-orange-600 active:shadow-lg " href="/news">News</a></p>
            <p><a href="https://twitter.com/twitter?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @twitter</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
            <p><a class="hover:text-yellow-300 hover:font-semibold hover:shadow-lg active:text-orange-600 active:shadow-lg " href="">Social Network2</a></p>

        </div>
        <div class="text-left text-sm px-20 overflow-visible ">
            <h2 class="text-2xl font-mono font-semibold">Other NBRIs</h2>
            <div>
                <a href="https://www.era.rothamsted.ac.uk">
                    <img src="/logos/2024-RLTE-LOGO.png" class=" h-16 py-2 w-auto object-scale-down" />
                </a>
            </div>
            <div>
                <a href="https://insectsurvey.com">
                    <img src="/logos/2024-RIS-LOGO.png" class="block h-16 py-2  w-auto object-scale-down" />
                </a>
            </div>
        </div>
    </div>
    <div class=" mx-auto border-t border-nw-blue-50 border-1 bg-nw-blue-900 p-4 text-nw-blue-50 sm:p-6 lg:p-8">

        <div class="flex justify-between">

            <div>&copy;Rothamsted Research 2024</div>
            <div><a href="mailto: comms@rothamsted.ac.uk">comms@rothamsted.ac.uk</a></div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 text-right">+44 (0) 1582 763 133</div>
        </div>

    </div>
    <div  class=" mx-auto border-t border-nw-blue-50 border-1 bg-nw-blue-900 p-4 text-nw-blue-50 sm:p-6 lg:p-8">
        <div class="flex justify-between">
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
                        </x-button-link>
                        <x-button-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                                {{ __('Register') }}
                        </x-button-link>



                @endif
                @endauth
                        </div>
    </div>
