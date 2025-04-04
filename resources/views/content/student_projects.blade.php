<x-guest-layout>
    <div>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Student Projects') }}
            </h2>
        </x-slot>
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-10 py-10 md:flex-row flex-col items-center">
              <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-6 font-medium text-gray-900">
                    Introduction
                  <br class="hidden lg:inline-block">
                </h1>
                <p style = "text-align:justify" class="mb-8 leading-relaxed">
                    The North Wyke Farm Platform is an exceptional resource for research student projects.
                    Research projects can take place on the farm platform or our long term data sets
                    can be used as the basis for research projects.
                    As well as being open to your own ideas we have a list of suggested projects that we'd
                    be happy to discuss with you whether you are a undergraduate/postgraduate student or a Director of
                    Studies or Supervisor.
                    <br><br>
              </div>
              <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="/images/data2.png">
              </div>
            </div>
          </section>

        <section class="m-0 bg-gray-100">
            <div class="p-10">
                <div style="text-align:justify;padding-right:0px" class="p-0">
                    <b>We are excited to support projects from a wide range of disciplines. Recent collaborations at
                        Masters and PhD level include:-</b>
                    <div class="p-5">
                        <ul class="space-y-1">
                            <x-li-arrow>
                                AI and Machine Learning
                            </x-li-arrow>
                            <x-li-arrow>
                                Data Visualisation and Data Journalism
                            </x-li-arrow>
                            <x-li-arrow>
                                Computer Science
                            </x-li-arrow>
                            <x-li-arrow>
                                Uncertainty
                            </x-li-arrow>
                            <x-li-arrow>
                                Sensor Development and Sensor Technologies
                            </x-li-arrow>
                            <x-li-arrow>
                                Bio-Acoustics
                            </x-li-arrow>
                            <x-li-arrow>
                                Soil, Air, Water, Meteorology
                            </x-li-arrow>
                            <x-li-arrow>
                                Animal and Crop Production
                            </x-li-arrow>
                            <x-li-arrow>
                                Farm Management Data
                            </x-li-arrow>
                            <x-li-arrow>
                                Biodiversity
                            </x-li-arrow>
                            <x-li-arrow>
                                Data Wrangling
                            </x-li-arrow>
                            <x-li-arrow>
                                Coding
                            </x-li-arrow>
                        </ul>
                    </div>
                </div>
                <div class="flex justify-center">
                    <x-button-link href="/content/student_resources" class="btn-primary">
                        Projects available
                    </x-button-link>

                    <x-button-link href="/content/supervisor_resources" class="ml-20 btn-primary">
                        Information for Supervisors
                    </x-button-link>
                </div>
        </section>
</x-guest-layout>
