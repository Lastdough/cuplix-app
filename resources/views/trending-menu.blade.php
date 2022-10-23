<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           
        </h2>
        <span class="text-5xl font-medium text-bluePri">
            {{ __('Trending') }}
        </span>
    </x-slot>


    <x-slot name="body">       
        <div class="mt-14 bg-pri">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{-- @livewire('dashboard.trending') --}}
            </div>
        </div>
    </x-slot>



    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
</x-app-layout>