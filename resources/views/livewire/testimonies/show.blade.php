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
    @if ($testimony -> long)
    <div class="py-3 px-3 border-t-2 border-nw-blue-900">{!! $testimony -> long !!}</div>

    @endif
     <div class="p-5 ">Things to list: as a reminder what we could have here too.
        <ul>
            <x-li-arrow>Link or frame to external</x-li-arrow>
            <x-li-arrow>Link to the project refered to </x-li-arrow>
            <x-li-arrow>Any papers that the student has written?</x-li-arrow>
        </ul>
    </div>



</div>
