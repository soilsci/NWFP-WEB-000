<div>

    <div class="w-100 container mx-auto flex flex-row place-content-between content-evenly justify-center gap-x-10">

        @foreach ($pinned as $pin)
            <!-- card -->
            <div class="max-w-100 mx-2 mt-4 flex aspect-square w-64 flex-col justify-between overflow-hidden rounded-lg border-l-4 border-orange-400 bg-gray-200 px-6 py-4 text-gray-800 shadow-xl hover:bg-orange-200 hover:shadow-md"
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
    <div class="row w-100 mt-10 border border-b-8 border-nw-blue-700"></div>
    <div class="w-100 container mx-auto grid grid-cols-2 gap-4 p-3 lg:w-4/5">

        @foreach ($pages as $page)
            <!-- card -->

            <div class="max-w-100 mx-2 mt-4 flex  w-100 flex-col justify-between overflow-hidden rounded-lg border-l-4 border-nw-blue-700 bg-gray-200 px-6 py-4 text-gray-800 shadow-xl hover:bg-gray-400 hover:shadow-md"
                v-for="card in cards">

                <div class="">
                    <h3 class="truncate text-lg font-semibold leading-tight">{{ $page->title }}</h3>
                    <p class="mt-2 text-sm tracking-wide text-gray-700">
                        {!! $page->description !!}
                    </p>
                </div>
                <div class="border-t-4 border-nw-blue-700 pt-5">

                    <x-button-link class="btn-primary" href="{{ route('content.with.page', ['page' => $page->name]) }}">
                        More...
                    </x-button-link>

                </div>
            </div>
        @endforeach
    </div>
</div>
