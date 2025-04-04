<div>

    <div class="w-100 container mx-auto flex flex-row justify-center gap-x-10  content-evenly place-content-between">

        @foreach ($pinned as $pin)
            <!-- card -->
            <div class="mx-2 mt-4
            flex
            flex-col
            aspect-square w-64 max-w-100
            justify-between
            overflow-hidden rounded-lg
            border-l-4 border-orange-400
             bg-gray-200 px-6 py-4
             text-gray-800
             shadow-xl"
                v-for="card in cards">

                <div class="">
                    <h3 class="truncate text-lg font-semibold leading-tight">{{ $pin->title }}</h3>
                    <p class="mt-2 text-sm tracking-wide text-gray-700">
                        {!! $pin->description !!}
                    </p>
                </div>
                <div class="border-t-4 border-orange-400 pt-5">

                    <x-button-link class="btn-primary" href="{{ route('content.with.page', ['page' => $pin->name]) }}">
                        More...
                    </x-button-link>

                </div>

            </div><!--/ card-->
        @endforeach
    </div>
<div class="row w-100 border border-b-8 border-nw-blue-700 mt-10"></div>
    <div class="w-100 container mx-auto grid grid-cols-2 gap-4 p-3 lg:w-4/5">

        @foreach ($pages as $page)
            <!-- card -->

            <div class="w-100 mx-2 mt-4 overflow-hidden rounded-lg border-l-4 border-nw-blue-800 bg-gray-200 shadow-xl md:flex-row"
                v-for="card in cards">
                <!-- media
                <div class="w-full">
                    <img class="inset-0 h-full w-full object-cover object-center" src="/images/banner1.png"/>
                </div>
                -->
                <!-- content -->
                <div class="flex w-full flex-col justify-between px-6 py-4 text-gray-800">
                    <h3 class="truncate text-lg font-semibold leading-tight">{{ $page->title }}</h3>
                    <p class="mt-2 border-b-4 border-nw-blue-700 text-sm tracking-wide text-gray-700">
                        {!! $page->description !!}
                    </p>
                    <p><a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="{{ route('content.with.page', ['page' => $page->name]) }}">More ...</a>
                </div>
            </div><!--/ card-->
        @endforeach
    </div>
</div>
