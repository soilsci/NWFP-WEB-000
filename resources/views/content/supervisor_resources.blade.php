<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Information for Supervisors and Programme Directors') }}
        </h2>
    </x-slot>

    <h2 class="h-16 content-center text-center bg-nw-blue-700 px-4 text-2xl font-medium text-nw-blue-50">
        Introduction</h2>

    <p style="text-align:center" class="px-1 pt-5">
        <x-button-link href="/content/student_projects" class="btn-primary">
            Back
        </x-button-link>
    </p>
    <section class="m-6">
        <div style="text-align:justify" class="p-3">
            <p>The North Wyke Farm Platform and wider facilities has a
                long track record of supporting post graduate research projects.
                One of the purposes of the farm platform is to provide exceptional resources and data for academics from
                any
                discipline and location to use.
                Data is readily available and quality controlled meaning that projects can be initiated rapidly, with
                little
                cost.</p>
            <br>
            <p>You can access this data for your students or for your own study immediately and for free by
                <a onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"
                    href="https://nwfp.rothamsted.ac.uk/">
                    <u style="color:red;">registering on the NWFP Data Portal</u></a>.
            </p>
            <br>
            We are happy to discuss your ideas on projects and do anything that might be required to help. This can be
            anything from a conversation
            through to co-development of funding proposals.
        </div>
    </section>


    <div class="p-0">
        <h2 class="h-16 content-center text-center bg-nw-blue-700 px-4 text-2xl font-medium text-nw-blue-50">
            How we support students</h2>
    </div>
    <section class="mx-0 my-0 bg-white">
        <ul class="m-10">
            <x-li-dot class="bg-nw-blue-500">Student and staff accommodation</x-li-dot>
            <x-li-dot class="bg-nw-blue-500">Student / Staff Support</x-li-dot>
            <x-li-dot class="bg-nw-blue-500">Data orientation / explanation</x-li-dot>
            <x-li-dot class="bg-nw-blue-500">Assistance with use of API's</x-li-dot>
            <x-li-dot class="bg-nw-blue-500">Co-supervision / Mentoring (subject to collaboration agreement /
                funding)</x-li-dot>
            <x-li-dot class="bg-nw-blue-500">Co-development of learning and teaching resources or data set
                publication</x-li-dot>
            <x-li-dot class="bg-nw-blue-500">Support in the understanding of FAIR data and access to our Electronic
                Research Notebook (ERN)</x-li-dot>
            <x-li-dot class="bg-nw-blue-500"> Hypothesis and Idea generation (link to student project ideas
                document)</x-li-dot>
        </ul>

        <div class="m-10">
            <a onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=yes,scrollbars=yes,dependent=no'); return false;"
                href="https://www.youtube.com/watch?v=q_YGPW_T9oM"><u>Video Testimonial [Imperial College,
                    London]</u><a>
            <a onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=yes,scrollbars=yes,dependent=no'); return false;"
                href="https://www.youtube.com/watch?v=FYW_j0rGjkM"><u>Video Testimonial [Imperial College,
                        London]</u><a>
        </div>
    </section>
    
    <div class="p-1">
        <div class="border-2 border-nw-blue-700 bg-nw-blue-50 p-3">
            <b>Please contact</b>
            <a onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"
                href="mailto:nw.farmplatform@rothamsted.ac.uk">
                <u>nw.farmplatform@rothamsted.ac.uk</u>
            </a>for enquiries.
            </p>
        </div>
    </div>

</x-guest-layout>