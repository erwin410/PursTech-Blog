<x-app-layout>
    <x-slot name="header">
        <h2 class="p-10 font-semibold text-4xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="w-full py-12 border-t border-b bg-black"></div>

    <div class="container mx-auto flex flex-wrap py-6">
            <!-- Post Section -->
            <section class="w-full md:w-2/3 flex flex-col items-center px-3">

                <article class="flex flex-col shadow my-4">
                    <!-- Article Image -->
                
                        <img src="{{ asset('/storage/' . $post->image)}}">
                    
                    <div class="bg-white flex flex-col justify-start p-6">
                        <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $post->category->name }}</a>
                        <a class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</a>
                        <p class="text-sm pb-8">
                         Publier le {{ $post->created_at->format('d M Y') }}
                        </p>
                        <p class="whitespace-pre-line pb-3">{{ $post->description }}</p>
                </article>
    
             
    
            </section>

            @include('inc.aside')
    </div>

    @include('inc.footer')
    
</x-app-layout>