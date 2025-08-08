<div>
 
    <div class="w-100 container mx-auto grid grid-cols-2 gap-8 p-4">
        <p style="font-size: 16px; text-align:justify" class="text-gray-900">
            The North Wyke Farm Platform (NWFP) is a pioneering, large-scale intensively instrumented research facility located in the south west of England, UK.
            It serves as a UK national capability that is funded by the BBSRC and UKRI, 
            and managed by Rothamsted Research, North Wyke. The site, established in 2010 – 2011, covers ~60 hectares of grassland and arable land, 
            and combines real-world farming with rigorous scientific monitoring.
            <br><br>
            Our aim is to help develop sustainable agricultural practices that produce healthy food 
            with minimal environmental footprint and to offer data-driven insights and innovations for the future of grassland and arable farming.
            We are a founding member of the Global Farm Platform Network, and are recognised by the 
            UN Food and Agriculture Organisation as an exemplar research facility.
        </p>
        <img src="{{ asset('images/nw_buildings2.png') }}" alt="fields" class="shadow-xl rounded-2xl w-48 h-48 border border-gray-200" 
     alt="Profile Photo" style="width: 100%; height: 300px;">
    </div>   

    <div class="w-100 container mx-auto flex flex-row place-content-between content-evenly justify-center gap-x-10">

        @foreach ($pinned as $pin)
            <!-- card -->
            <div class="max-w-100 mx-2 mt-4 flex  w-100 flex-col justify-between overflow-hidden rounded-lg  px-6  text-gray-800 "
                v-for="card in cards">
                <div class="pt-5">
                    <a  href="{{ route('content.with.page', ['page' => $pin->name]) }}">
                        <img src="/images/sq-{{ $pin->imagefile }}" class="rounded-full w-64 text-lg text-white bg-nw-blue-900 mx-auto my-5 hover:bg-nw-blue-600 p-2" />
                    </a>
                </div>
                <div class="mx-auto border-t-4 border-nw-blue-900 py-5">
                    <h3 class="truncate text-lg font-semibold leading-tight mx-auto">{{ $pin->title }}</h3>

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
