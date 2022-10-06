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
                

                {{-- Comment Section --}}
                @if (Auth::user())
                    
                <div class="comment-area mt-4">
                    <div class="card card-body">
                        <h6 class="card-title">Laisser un commentaire</h6>
                        <form action="{{ route('comment.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <textarea name="content" class="form-control" cols="99" rows="2    " required></textarea>
                            <button type="submit" class="btn btn-outline-primary mt-3">Envoyer</button>
                        </form>
                    </div>
                </div>
                @endif

                @foreach ($post->comments as $comment)
                    
                <div class="card card-body w-full shadow-sm mt-3 mb-3">
                    <div class="detail-area">
                        <h6 class="user-name mb-3">
                            {{ $comment->user->name }}
                            <small class="ms-3 text-primary">Commenter le: {{ $comment->created_at->format('d M Y') }}</small>
                        </h6>
                        <p class="user-comment mb-2">
                           {{ $comment->content }}
                        </p>
                    </div>
                    {{-- @if (Auth::check() && Auth::id() == $comment->user_id)
                        
                    <div>
                        <a href="#" class="btn btn-primary btn-sm me-2">Modifier</a>
                        <a href="{{ route('comment.destroy', $comment->id)}}" class="btn btn-danger btn-sm me-2">Supprimer</a>
                    </div>
                    @endif --}}
                </div>

                @endforeach
             
    
            </section>

            @include('inc.aside')
    </div>

    @include('inc.footer')
    
</x-app-layout>