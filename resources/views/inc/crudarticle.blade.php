
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
            <td>{{ Str::limit($post->title, 10) }}</td>
            <td>{{ Str::limit($post->description, 20) }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="{{ route('posts.edit', $post) }}" class="link-dark" ><i class="bi bi-pencil fs-5 me-3"></i></a>
                <a href="#" class="link-dark" class="modalClick" data-bs-toggle="modal" data-bs-target="#deleteEmployeeModal"><i class="bi bi-trash3 fs-5"></i></a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
      
  
      
      
      {{-- delete modal --}}
      <div class="modal fade" id="deleteEmployeeModal" tabindex="-1" aria-labelledby="supprunuser" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Supprimer un Article</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir supprimer cet utilisateur ?</p>
                    <p class="text-danger">
                        <small>Cette action est irréversible !</small>
                    </p>
                </div>
                <div id='alertSuppr' class="alert alert-success" role="alert" style='display:none;'></div>
                <div class="modal-footer">
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" id="destroy-post-form">
                        @csrf
                        @method('delete')

                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" data-user="" data-dismiss="dialog" id="destroy-post-form" class="btn btn-outline-danger">Supprimer</button>
                    </form>
                </div>
    
            </div>
        </div>
    </div>
    
    <div class="flex-end">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
        

    
</div>