<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="w-full mb-20 py-12 border-t border-b bg-black"></div>

    @include('inc.crudcategory')
</x-app-layout>