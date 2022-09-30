<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier {{ $category->name }}
        </h2>
    </x-slot>

    <div class="w-full py-12 border-t border-b bg-black">

    </div>

    <div class="my-5">
        @foreach ($errors->all() as $error)
            <span class="block text-red-500">{{ $error }}</span>
        @endforeach
    </div>
                <div class="flex items-center justify-center max-w-2xl mx-auto p-16 mt-20 mb-20 bg-white shadow-2xl rounded-xl">
                    
                    <form action="{{ route('categories.update', $category) }}" method="POST" enctype="multipart/form-data" class="min-w-full">
                        @method('put')
                        @csrf

                        <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nom</label>
                <input id="name" name="name" value="{{ $category->name }}"class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Saisissez le nom de la catégorie" />
                
                <div class="flex items-center justify-center w-full">
                    <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Sauvegarder</button>
                </div>
                    </form>
                    
                </div>

        @include('inc.footer')          
</x-app-layout>