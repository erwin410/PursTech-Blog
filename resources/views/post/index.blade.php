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
                        <h3 class="text-black text-sm font-bold uppercase pb-4">{{ $post->category->name }}</h3>
                        <a href="{{ route('posts.show', $post) }}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</a>
                        <p class="text-sm pb-3">
                        Publier le {{ $post->created_at->format('d M Y') }}
                        </p>
                        <p class="pb-6">{{ Str::limit($post->description, 125) }}</p>
                        <button class="p-2 pl-5 pr-5 w-40 bg-[#04BFAD] hover:bg-[#00BBC9] text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                            <a href="{{ route('posts.show', $post) }}" class="hover:text-black"> Voir plus  <i class="fas fa-arrow-right"></i></a>
                        </button>
                    </div>

                </article>

            @endforeach

            <!-- Pagination -->
            {{ $posts->links()}}

        </section>

        <!-- Sidebar Section -->
        @include('inc.aside')

    </div>

    <!-- Footer Section -->
    @include('inc.footer')

</x-app-layout>
