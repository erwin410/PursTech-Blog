<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

     
    <!-- Category Nav -->
    @include('inc.category')


    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            @foreach ($posts as $post)

                <article class="flex flex-col shadow my-4">
                    <!-- Article Image -->
                    <a href="{{ route('posts.show', $post) }}" class="hover:opacity-75">
                        <img src="{{ asset('/storage/' . $post->image)}}">
                    </a>
                    
                    <div class="bg-white flex flex-col justify-start p-6">
                        <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $post->category->name }}</a>
                        <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</a>
                        <p href="#" class="text-sm pb-3">
                        Publier le {{ $post->created_at->format('d M Y') }}
                        </p>
                        <p class="pb-6">{{ Str::limit($post->description, 125) }}</p>
                        <a href="{{ route('posts.show', $post) }}" class="uppercase text-gray-800 hover:text-black">Voir plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

            @endforeach

            <!-- Pagination -->
            <div class="flex items-center py-8">
                <a href="#" class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next <i class="fas fa-arrow-right ml-2"></i></a>
            </div>

        </section>

        <!-- Sidebar Section -->
        @include('inc.aside')

    </div>

    <!-- Footer Section -->
    @include('inc.footer')

</x-app-layout>