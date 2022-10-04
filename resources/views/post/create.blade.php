<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter un article') }}
        </h2>
    </x-slot>

    <div class="w-full py-12 border-t border-b bg-black">

    </div>


                <div class="flex items-center justify-center max-w-2xl mx-auto p-16 mt-20 mb-20 bg-white shadow-2xl rounded-xl">
                    
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="min-w-full">
                        @csrf

                        <label for="title" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Titre</label>
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                        <input id="title" name="title" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Saisissez votre titre" />
                        

                        <label for="image" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Image</label>
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                        <input type="file" id="image" name="image" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
                        
                        
                        <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Catégories</label>
                        <select name="category" id="category" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border">
                            
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                      
                        </select>

                        
                        <label for="description" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Description</label>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                        <textarea name="description" id="description" cols="30" rows="10" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-30 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Saissisez votre description"></textarea>
                        
                        <div class="flex items-center justify-center w-full">
                            <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Créer l'article</button>
                        </div>
                    </form>
                    
                </div>


            @include('inc.footer')
</x-app-layout>