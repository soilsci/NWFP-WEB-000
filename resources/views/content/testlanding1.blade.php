<x-guest-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Welcome to the North Wyke Farm Platform Website') }}
        </h2>
    </x-slot> --}}

<section
   x-data="
   {showCards: 'all',activeClasses: 'bg-primary text-white',inactiveClasses: 'text-body-color dark:text-dark-6 hover:bg-primary hover:text-white',}"
   class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark">

   <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
         <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[800px] text-center">
               <h2 class="text-dark mt-0 mb-10 text-3xl leading-[1.208] font-bold sm:text-4xl md:text-[40px]">
                  North Wyke Farm Platform
               </h2>
               <p style ="text-align: justify" class="text-body-color text-base dark:text-dark-6">
                The North Wyke Farm Platform (NWFP) was established in 2010 to study and improve grassland livestock production at the farm-scale. 
                The NWFP uses a combination of over 400 environmental sensors, routine field and lab-based measurements, and detailed management records to 
                monitor livestock and crop production, emissions to water, emissions to air, soil health, and biodiversity. 
                The rich NWFP datasets help researchers to evaluate the effectiveness of different grassland (and arable) farming systems, 
                which in turn, contributes to the development of sustainable, resilient and net zero land management strategies.
               </p>
               <br>
                <p style="text-align: justify" class="text-body-color text-base dark:text-dark-6">
                  All data produced on the NWFP are free to access either through the
                  <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://nwfp.rothamsted.ac.uk/"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    <u>NWFP Data Portal</u>
                </a> 
                where users are required to register their interest or via API (add link to API here).
               </p>
            </div>
         </div>
      </div>
     
      <div class="-mx-4 flex flex-wrap justify-center">
         <div class="w-full px-4">
            <ul class="mb-12 flex flex-wrap justify-center space-x-1">
            </ul>
         </div>
      </div>
      
      <div class="-mx-4 flex flex-wrap">
         {{-- Card 1 --}}
         <div
            :class="showCards == 'all' "
            class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
            <div class="relative mb-12">
               <div class="overflow-hidden rounded-[10px]">
                  <img
                     src="/images/Fig1a.png"
                     alt=""
                     class="w-full"
                     />
               </div>
               <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 
               text-center shadow-portfolio dark:shadow-box-dark">
                  {{-- <span class="text-primary mb-2 block text-sm font-medium">
                     Text
                  </span> --}}
                  <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                     TEXT
                  </h3>
                     <x-button-link href="javascript:void(0)" target="_blank" class="btn-primary">
                     BUTTON TEXT
                     </x-button-link>
               </div>
            </div>
         </div>

         {{-- Card 2 --}}
         <div
            :class="showCards == 'all'"
            class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
            <div class="relative mb-12">
               <div class="overflow-hidden rounded-[10px]">
                  <img
                     src="/images/Fig1a.png"
                     alt=""
                     class="w-full"
                     />
               </div>
               <div
                  class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark"
                  >
                  <!--<span class="text-primary mb-2 block text-sm font-medium">
                  Development
                  </span>-->
                  <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                     TEXT
                  </h3>
                  <!--<a
                     href="javascript:void(0)"
                     class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-white"
                     >
                  View Details
                  </a>-->
                  <x-button-link href="javascript:void(0)" target="_blank" class="btn-primary">
                     BUTTON TEXT
                  </x-button-link>
               </div>
            </div>
         </div>

         {{-- Card 3 --}}
         <div :class="showCards == 'all'"
         class="w-full px-4 md:w-1/2 xl:w-1/3"
         >
         <div class="relative mb-12">
            <div class="overflow-hidden rounded-[10px]">
               <img
                  src="/images/Fig1a.png"
                  alt=""
                  class="w-full"
                  />
            </div>
            <div
               class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark"
               >
               <!--<span class="text-primary mb-2 block text-sm font-medium">
               Development
               </span>-->
               <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                  TEXT
               </h3>
               <!--<a
                  href="javascript:void(0)"
                  class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-white"
                  >
               View Details
               </a>-->
               <x-button-link href="" target="_blank" class="btn-primary">
                  BUTTON TEXT
               </x-button-link>
            </div>
         </div>

         {{-- Card 4 --}}

         
      </div>
         
</section>

</x-guest-layout>
