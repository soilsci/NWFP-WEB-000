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


<livewire:projects />


<livewire:publications  keyref="keyRefStudent" />

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

    <section>
        <h2 class="h-16 content-center text-center bg-nw-blue-700 px-4 text-2xl font-medium text-nw-blue-50">
            Video Testimonies</h2>
            <p style="text-align:center" class="px-1 pt-5">
            </p>
        <div class="w-100 container mx-auto grid grid-cols-2 gap-4 px-3 lg:w-4/5">
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/q_YGPW_T9oM?si=651Ze1SyKp13s4fu" title="YouTube video player"
                    width="377" height="210" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/FYW_j0rGjkM?si=_orT8xm48xxIVZnb" title="YouTube video player"
                    width="377" height="210" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <livewire:testimonies />

</x-guest-layout>
