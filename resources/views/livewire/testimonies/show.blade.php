<div>

    @php
        //dd($id)
    @endphp

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Student Testimony from '.  $student -> first_name . ' '  . $student -> last_name ) }}
        </h2>
    </x-slot>

    <div class="bg-nw-blue-900 text-center  font-medium text-3xl text-gray-50 p-10 ">
        <div class="text-3xl"> {!! $testimony -> title !!}</div>
        <div class="text-lg">{{ $student -> first_name . ' '  . $student -> last_name  }} - {{ $organisation -> name  }} </div>
    </div>
    <div class="py-5 px-10 text-lg italic text-center ">{!! $testimony -> short !!}</div>

    @if($testimony -> video_id)
    <div class="flex flex-col items-center bg-gray-300 w-100">
<div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.youtube.com/embed/{{ $testimony -> video_id }}" title="YouTube video player"
                        width="400" height="225" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
    @endif
    @if ($testimony -> long)
    <div class="py-3 px-3 border-t-2 border-nw-blue-900">{!! $testimony -> long !!}</div>
    @endif

        @if ($testimony -> video_id == null && $testimony -> URL)
    <p class="p-2"><a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900" href="{{ $testimony -> URL }}">{{ $testimony -> URL }}</p>
    @endif
@if ($testimony ->project_id)
    <div class="p-5 ">
        <ul>
            <x-li-arrow>Project : {{ $project -> name }} </x-li-arrow>

        </ul>
    </div>
@endif


</div>
