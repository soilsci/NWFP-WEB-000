<x-guest-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Student Resources') }}
            </h2>
        </div>

    </x-slot>
    <h2 class="h-16 content-center text-center bg-nw-blue-700 px-4 text-2xl font-medium text-nw-blue-50">
        Available Projects</h2>
        <p style="text-align:center" class="px-1 pt-5">
            <x-button-link href="/content/student_projects" class="btn-primary">
                Back
            </x-button-link>
        </p>

    <!-- ====== Experimenting with populating cards in a loop -->
    {{-- <div class="pt-6 pb-12 bg-gray-300">
        <div id="card" class="">
            <h2 class="text-center font-serif  uppercase text-4xl xl:text-5xl">Recent Articles</h2>
            <!-- container for all cards -->
            <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
                <!-- card -->
                <div v-for="card in cards" class="flex flex-col md:flex-row overflow-hidden
                                              bg-white rounded-lg shadow-xl  mt-4 w-100 mx-2">
                    <!-- media -->
                    <div class="h-64 w-auto md:w-1/2">
                        <img class="inset-0 h-full w-full object-cover object-center" :src="card.img" />
                    </div>
                    <!-- content -->
                    <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                        <h3 class="font-semibold text-lg leading-tight truncate">{{ card.title }}</h3>
                        <p class="mt-2">
                            {{ card.excerpt }}
                        </p>
                        <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                            {{ card.author }} &bull; {{ card.date }}
                        </p>
                    </div>
                </div><!--/ card-->
            </div><!--/ flex-->
        </div>
    </div> --}}
<!-- ====== End Experimenting with populating cards in a loop  -->



<!-- ====== Project Section Start -->
    
    <section>
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
            <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">
                <div class="p-6">
                    <img class="object-cover object-center w-full mb-6 lg:h-48 md:h-36 rounded-xl"
                        src="/images/crops.png" alt="crops">

                    <h1
                        class="mx-auto mb-6 text-xl text-center font-semibold leading-none tracking-tighter text-neutral-600 lg:text-2xl">
                        Crop Yield Productivity and Management
                    </h1>
                    <p style="text-align:justify" class="mx-auto text-base leading-relaxed text-gray-900 border-t-2 
                    border-t-nw-blue-600 border-b-2 border-b-nw-blue-600">
                        This project develops an AI model to accurately predict and forecast crop yield while responding
                        to changes in environmental conditions,
                        like soil moisture and weather patterns. The project will capture all key aspects of
                        uncertainty.</p>
                    <div class="mt-4">
                        <p style= "text-align:justify" class="mx-auto text-base leading-relaxed text-gray-900 mb-2">
                        <b>Goal:</b> Predict/forecast crop yield using AI-driven models (including data-driven plus process-based hybrids) 
                        informed by environmental and farm management data.
                        </p>
                        <p style= "text-align:justify" class="mx-auto text-base leading-relaxed text-gray-900 mb-1">
                        <b>Data:</b> Crop (grass / arable) yield data, soil moisture levels, weather data, management data, 
                        satellite remote sensing data. Future climate scenarios data.
                        </p>
                    </div>

                    <div class="mt-1">
                        <a href="#"
                            class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600"
                            title="read more"> Read More » </a>
                    </div>
                </div>



            </div>
        </div>
    </section>
<!-- ====== Project Section End -->

    <section>
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
    
            <ul class="space-y-3 p-3">
                <x-li-dot class="bg-nw-blue-600">Link to student video testimonies (e.g. Imperial) and
                    Photographs</x-li-dot>
                <x-li-dot class="bg-nw-blue-600 mb-10">Link to data animation</x-li-dot>
                <div class="border-2 border-nw-blue-700 bg-nw-blue-50 p-5 mb-10">
                    <b>Please contact</b>
                    <a onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"
                        href="mailto:nw.farmplatform@rothamsted.ac.uk">
                        <u>nw.farmplatform@rothamsted.ac.uk</u>
                    </a>for enquiries.
                    </p>
                </div>
            </ul>
        </div>
    
    </section>
</x-guest-layout>