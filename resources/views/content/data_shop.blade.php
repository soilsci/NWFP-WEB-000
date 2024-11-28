<x-guest-layout>
    <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Where to get Data') }}
            </h2>
    </x-slot>
    <div class="p-3">
        <p>A form of text here to explain where things are. </p>
        <div class="grid grid-cols-3 gap-4 rounded-top ">
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">1.
                    Prepared Datasets</h2>
                <p> A collection of prepared datasets is available in Rothamsted Data Repository powered by CKAN.
                    It has nice search features to help find what you need </p>
                <p>Make a BUTTON link that goes to https://data.rothamsted.ac.uk/group/north-wyke-farm-platform</p>
            </div>
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">2. the NWFP data API</h2>

                <p>Access ......  </p>
                <p>Make a BUTTON link that goes to the API</p>

            </div>
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
                    <strong>3. NWFP data portal</strong>
                </h2>
                <p>Description and link to go there</p>
            </div>

        </div>
    </div>
</x-guest-layout>
