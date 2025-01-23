<x-guest-layout>
    <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Where To Get Data') }}
            </h2>
    </x-slot>
    <div class="p-3">
        <p>Core data and non-core or worked-up data sets are freely available via the different routes as described below:</p>
        <div class="grid grid-cols-3 gap-4 rounded-top ">
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
                    <strong>1. NWFP Data Portal</strong>
                </h2>

                <br>
                <p>Core data as yearly .csv files are available from the dedicated portal. 
                    Please note you are required to register in order to use the portal.</p>
            </div>
            
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
                    <strong>2. API</strong></h2>
                <br>
                <p>Access to the core data via API.</p>
            </div>
            
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
                    <strong>3. Non-core and Worked-up Datasets</strong></h2>
                <br>    
                <p> A collection of non-core and worked-up datasets are available from the Rothamsted Data Repository powered by CKAN.
                    The site has a useful search feature to search for various topics.</p>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 rounded-top ">
            <div>
            <p class="px-0 pt-5">
                <x-button-datalinks href="https://nwfp.rothamsted.ac.uk/" target="_blank" class="btn-primary">
                    Click to Access Data Portal
                </x-button-datalinks> 
            </div>
            <div>
                <p class="px-0 pt-5">
                    <x-button-datalinks href="" target="_blank" class="btn-primary">
                        Click to Access API
                    </x-button-datalinks>
                </div>
                <div>
                    <p class="px-0 pt-5">
                        <x-button-datalinks href="https://data.rothamsted.ac.uk/group/north-wyke-farm-platform" target="_blank" class="btn-primary">
                            Click to Access Data Repository
                        </x-button-datalinks>
                </div>   

        </div>
    </div>


</x-guest-layout>