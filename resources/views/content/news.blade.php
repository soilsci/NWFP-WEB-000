<x-guest-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('News and Press Releases') }}
            </h2>
            <x-share-on-bluesky></x-share-on-bluesky>
        </div>
    </x-slot>

    <livewire:news  keyref="" />

</x-guest-layout>
