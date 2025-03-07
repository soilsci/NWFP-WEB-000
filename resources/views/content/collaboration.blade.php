<x-guest-layout>
    <div>
        <x-slot name="header">
            <h1 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Collaborate') }}
            </h1>
        </x-slot>
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-10 py-10 md:flex-row flex-col items-center">
              <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h2 class="title-font sm:text-4xl text-3xl mb-6 font-medium text-gray-900">
                    Collaborate With Us
                  <br class="hidden lg:inline-block">
                </h2>
                <p style = "text-align:justify" class="mb-8 leading-relaxed">
                    We welcome conversations about research collaboration.
                    <br><br>
                    <b>Over 196 collaborative projects on the North Wyke Farm Platform have been completed so far.</b>
                    <br><br>
                    We are happy to talk to you about 
                    Post Graduate research projects, grant application and funding proposals or collaboration 
                    on data projects and sensor technologies.
                    <br><br>
                    If you wish to carry out a project on the Farm Platform please download, complete and 
                    submit the access request form available from the link below.
              </div>
              <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="/images/data2.png">
              </div>
            </div>
          </section>

        <section class="m-0 bg-gray-100">
            <div class="p-10">
                <div style="text-align:justify;padding-right:0px" class="p-0">
                    <div class="p-5">
                        <ul class="space-y-1">
                            <x-li-dot class="bg-nw-blue-800">
                                <p>
                                    Information for Research Students and Staff can be found 
                                    <a class="hover:font-semibold hover:text-yellow-300 hover:shadow-lg active:text-orange-600 active:shadow-lg" 
                                    href ="/content/student_projects"><span class="font-bold" style="color:blue; text-decoration:underline;">here</span>
                                    </a>
                                </p>
                            </x-li-dot>
                            <x-li-dot class="bg-nw-blue-800">
                                <p>
                                    The Farm Platform access request Form can be downloaded using this
                                    <a class="hover:font-semibold hover:text-yellow-300 hover:shadow-lg active:text-orange-600 active:shadow-lg" 
                                    href ="/documents/Farm Platform Access Request Form.docx"><span class="font-bold" 
                                    style="color:blue; text-decoration:underline;">link</span></a>
                                </p>
                            </x-li-dot>
                            <x-li-dot class="bg-nw-blue-800">
                                <p>
                                Information about the farm platform data collections can be found
                                <a class="hover:font-semibold hover:text-yellow-300 hover:shadow-lg active:text-orange-600 active:shadow-lg" 
                                href ="/content/data_collection"><span class="font-bold" style="color:blue; text-decoration:underline;"> here</span>
                                </a>
                                </p>
                                
                            </x-li-dot>
                            <x-li-dot class="bg-nw-blue-800">
                                <p>
                                Contact information for our Principal Investigators and team can be found
                                <a class="hover:font-semibold hover:text-yellow-300 hover:shadow-lg active:text-orange-600 active:shadow-lg" 
                                href ="/content/contacts"><span class="font-bold" style="color:blue; text-decoration:underline;"> here</span>
                                </a>
                            </p>
                            </x-li-dot>
                            
                        </ul>
                    </div>
                </div>
        </section>
</x-guest-layout>