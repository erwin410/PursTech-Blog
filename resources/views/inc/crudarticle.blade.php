
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
              <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                <a href="{{ route('posts.edit', $post) }}" class="link-dark" ><i class="bi bi-pencil fs-5 me-3"></i></a>

                @csrf
                @method('delete')

                <button type="submit" class="link-dark"><i class="bi bi-trash3 fs-5"></i></button>
              </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
  
    
    <div class="flex-end">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
        

    
</div>