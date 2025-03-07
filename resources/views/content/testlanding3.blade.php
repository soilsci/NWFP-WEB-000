<x-guest-layout>
    <!-- ====== Hero Section Start -->
    <div class="relative bg-white dark:bg-dark pt-[120px] pb-[110px] lg:pt-[20px]">
       <div class="container mx-auto">
          <div class="flex flex-wrap items-center -mx-4">
             <div class="w-full px-4 lg:w-8/12">
                <div class="hero-content">
                   <h1 class="mt-0 h-12 content-center bg-nw-blue-50 px-0 lg:text-5xl sm:text-2xl font-bold text-nw-blue-900 text-center">
                      North Wyke Farm Platform</h1>
                <br>
                   <p style="text-align: justify" class="mb-8 max-w-[800px] text-base text-body-color dark:text-dark-6">
                    The North Wyke Farm Platform (NWFP) was established in 2010 to study and improve grassland livestock production at the farm-scale. 
                    The NWFP uses a combination of over 400 environmental sensors, routine field and lab-based measurements, and detailed management records to 
                    monitor livestock and crop production, emissions to water, emissions to air, soil health, and biodiversity.
                    <br>
                    <br>
                    The rich NWFP datasets help researchers to evaluate the effectiveness of different grassland (and arable) farming systems, 
                    which in turn, contributes to the development of sustainable, resilient and net zero land management strategies.
                    <br>
                    <br>
                    All data produced on the NWFP are free to access either through the NWFP Data Portal where users are required to register 
                    their interest or via API.
                    </p>
    
                   <ul class="flex flex-wrap items-center">
                      <li>
                         <a href="{{ route('content.with.page', ['page' => 'data_shop']) }}"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"
                            class="inline-flex items-center justify-center py-3 px-5 text-center text-base sm:text-3xl font-medium text-[#464646] dark:text-white hover:text-primary">
                              <span class="mr-2">
                                 <svg width="40" height="40" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12.6152" r="12" fill="#3758F9" />
                                    <rect x="7.99893" y="14.979" width="8.18182" height="1.63636" fill="white"/>
                                    <rect x="11.2717" y="7.61523" width="1.63636" height="4.09091" fill="white"/>
                                    <path d="M12.0898 14.1606L14.9241 11.0925H9.25557L12.0898 14.1606Z" fill="white"/>
                                 </svg>
                              </span>
                              Download Data
                         </a>
                      </li>
                   </ul>
                 
                   
                </div>
             </div>

             {{-- image --}}
             {{-- <div class="hidden px-4 lg:block lg:w-1/12"></div> --}}
             <div class="w-full px-4 lg:w-4/12">
                <div class="lg:ml-auto lg:text-right">
                   <div class="relative z-10 inline-block pt-11 lg:pt-0">
                      <img
                         src="\images\FP_basicmap.jpg"
                         alt="FP_map"
                         class="max-w-full lg:ml-auto"
                         />
                      
                   </div>
                </div>
             </div>
          </div>
       
        </div>
    
    </div>
    
    <section>
       <div class="-mx-4 flex flex-wrap">
          {{-- Card 1 --}}
         <div :class="showCards == 'all' " class="w-full px-8 md:w-1/2 xl:w-1/3">
             <div class="relative mb-12">
                <div class="overflow-hidden rounded-[10px]">
                   <img src="/images/publications.png" alt="" class="w-full" />
                </div>
                
                <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 
                text-center shadow-portfolio dark:shadow-box-dark">
                   {{-- <span class="text-primary mb-2 block text-sm font-medium">
                      Text
                   </span> --}}
                   <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                      Publications
                   </h3>
                      <x-button-link href="{{ route('content.with.page', ['page' => 'publications']) }}" target="_blank" class="btn-primary">
                      View Details
                      </x-button-link>
                </div>
             </div>
          </div>
    
          {{-- Card 2 --}}
          <div :class="showCards == 'all'" class="w-full px-8 md:w-1/2 xl:w-1/3">
             <div class="relative mb-12">
                <div class="overflow-hidden rounded-[10px]">
                   <img src="/images/Fig1a.png" alt="" class="w-full"/>
                </div>
                <div
                   class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark"
                   >
                   <!--<span class="text-primary mb-2 block text-sm font-medium">
                   Development
                   </span>-->
                   <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                      News
                   </h3>
                   <!--<a
                      href=""
                      class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-white"
                      >
                   View Details
                   </a>-->
                   <x-button-link href="javascript:void(0)" target="_blank" class="btn-primary">
                      View Details
                   </x-button-link>
                </div>
             </div>
          </div>
    
          {{-- Card 3 --}}
          <div :class="showCards == 'all'" class="w-full px-8 md:w-1/2 xl:w-1/3">
            <div class="relative mb-12">
               <div class="overflow-hidden rounded-[10px]">
                  <img src="/images/Fig1a.png" alt="publications" class="w-full"/>
               </div>
               <div
                  class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark"
                  >
                  <!--<span class="text-primary mb-2 block text-sm font-medium">
                  Development
                  </span>-->
                  <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                     Whatever
                  </h3>
                  <!--<a
                     href="javascript:void(0)"
                     class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-white"
                     >
                  View Details
                  </a>-->
                  <x-button-link href="javascript:void(0)" target="_blank" class="btn-primary">
                     View Details
                  </x-button-link>
               </div>
          </div>
    </section>
    
    <div>
 <p><iframe
                src="https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1KQ75WdA1zVxpyPTH7U_LrjEicULz6ymZNjI_njEKMtU&amp;font=Default&amp;lang=en&amp;initial_zoom=1&amp;height=650"
                style="width: 100%; height: 600px;" frameborder="0" height="14" scrolling="no" width="47"></iframe></p>
    </x-guest-layout>
    

    </div>
   