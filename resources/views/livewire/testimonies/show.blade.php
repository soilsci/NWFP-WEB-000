<div>



    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Student Testimony - ' . $student -> first_name . ' '  . $student -> last_name ) }}
        </h2>
    </x-slot>

    <div class="bg-orange-500 text-center  font-medium text-3xl text-gray-50 p-10 ">
        BUG: this retreive always the same record = we have a problem with the controller!
        but we can still look at the style.
    </div>

    <div class="bg-nw-blue-900 text-center  font-medium text-3xl text-gray-50 p-10 ">
        <div class="text-3xl">This is the TITLE {!! $testimony -> title !!}</div>
        <div class="text-lg">{{ $student -> first_name . ' '  . $student -> last_name  }} - {{ $organisation -> name  }} </div>
    </div>
    <div class="py-5 px-10 text-lg italic text-center ">This will be the SHORT testimony - formatted like an abstract {!! $testimony -> short !!}</div>
    @if ($testimony -> long)
    <div class="py-3 px-3 border-t-2 border-nw-blue-900">This will be the LONG testimony - formatted like an blog post {!! $testimony -> long !!}</div>

    @endif
     <div class="p-5 ">Things to list: as a reminder
        <ul>
            <x-li-arrow>Link or frame to external</x-li-arrow>
            <x-li-arrow>Link to the project refered to </x-li-arrow>
            <x-li-arrow>Any papers that the student has written?</x-li-arrow>
        </ul>
    </div>



</div>
