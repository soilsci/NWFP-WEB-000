<x-guest-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Projects') }}
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








</x-guest-layout>
