
<div class="container">
    <h2 class="mb-4 fs-3">Liste des articles</h2>
    <table class="table table-hover text-center">
        <thead class="table-dark">
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Catégorie</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">

            @foreach ($posts as $post)

          <tr>
            <td><a href="{{ route('posts.show', $post) }}">{{ Str::limit($post->title, 10) }}</a></td>
            <td><a href="{{ route('posts.show', $post) }}">{{ Str::limit($post->description, 20) }}</a></td>
            <td><a href="{{ route('posts.show', $post) }}">{{ $post->category->name }}</a></td>
            <td>
                <a href="{{ route('posts.edit', $post) }}" class="link-dark" ><i class="bi bi-pencil fs-5 me-3"></i></a>
                <a href="#" class="link-dark" onclick="event.preventDefault
                document.getElementById('destroy-post-form').submit();"><i class="bi bi-trash3 fs-5"></i>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" id="destroy-post-form">
                  @csrf
                  @method('delete')
              </form>
                </a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
      
  
      
      
      {{-- delete modal --}}
      {{-- @include('modalarticle.delete') --}}
    
    <div class="flex-end">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
        

    
</div>