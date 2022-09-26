<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="w-full mb-20 py-12 border-t border-b bg-black">

    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if(session('success'))
            {{ session('success')}}
        @endif
    </div>
    
    @include('inc.crudarticle')

    

</x-app-layout>
