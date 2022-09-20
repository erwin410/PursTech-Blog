<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier {{ $post->title }}
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
                    
                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="min-w-full">
                        @method('put')
                        @csrf

                        <label for="title" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Titre</label>
                        <input id="title" name="title" value="{{ $post->title }}" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Saisissez votre titre" />
                        
                        <label for="image" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Image</label>
                        <input type="file" id="image" name="image" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
                        
                        <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Catégories</label>
                        <select name="category" id="category" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border">
                            
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                      
                        </select>

                        <label for="description" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-30 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Saissisez votre description">{{ $post->description }}
                        </textarea>
                        
                        <div class="flex items-center justify-center w-full">
                            <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Enregistrer les modifications</button>
                        </div>
                    </form>
                    
                </div>

        @include('inc.footer')          
</x-app-layout>