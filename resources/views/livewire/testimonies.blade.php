<div class="container">
    <x-slot name="sub_header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Testimonies') }}
        </h2>
    </x-slot>
    @php
        $align = 'justify-items-end';
    @endphp
    @foreach ($testimonies as $testimony)
        <!-- card -->
        @php
            if ($align == 'justify-items-start') {
                $align = 'justify-items-end';
            } else {
                $align = 'justify-items-start';
            }
        @endphp
        {{-- <div class="row {{ $align }} grid justify-items-start">
            <div class="w-4/5  mx-2 m-4   border-2 border-nw-blue-700 bg-gray-200 px-6 py-4 text-gray-800 shadow-xl hover:bg-gray-400 hover:shadow-md"
                v-for="card in cards">

                <div class="">
                    <h3 class="truncate text-lg font-semibold leading-tight">{{ $testimony->title }}</h3>
                    <p class="mt-2 text-sm tracking-wide text-gray-700">
                        {!! $testimony->short !!}
                    </p>
                </div>
                <div class="pt-5">

                    <x-button-link class="bn-primary" href="/testimonies/{{$testimony->id}}">
                        More...
                    </x-button-link>

                </div>
            </div>
        </div> --}}
        <div class="mx-auto mt-24 ">
            <div
                class="flex items-center justify-start gap-3 overflow-hidden rounded-xl border border-nw-blue-700 bg-white">

                <div class="flex-shrink-0">
                    @if ($testimony->video_id)
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe src="https://www.youtube.com/embed/{{ $testimony->video_id }}"
                                title="YouTube video player" width="400" height="225" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    @endif
                </div>

                <div class="flex flex-col gap-2 p-2">

                    <h3 class="truncate text-lg font-semibold leading-tight">{{ $testimony->title }}</h3>
                    <p class="mt-2 text-sm tracking-wide text-gray-700">
                        {!! $testimony->short !!}
                    </p>

                    <x-button-link class="bn-primary" href="/testimonies/{{ $testimony->id }}">
                        More...
                    </x-button-link>
                </div>

            </div>

        </div>
    @endforeach
</div>
