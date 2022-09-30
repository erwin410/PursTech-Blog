
<div class="container">
    <h2 class="mb-4 fs-3">Liste des catégories</h2>
    <div class="flex justify-end">
    <a class="btn btn-primary mb-2" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Créer une catégories</a>
    </div>
    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Date de création</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            @foreach ($categories as $category)
                
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at }}</td>
                <td>
                    <a href="#" class="link-dark"><i class="bi bi-pencil fs-5 me-3"></i></a>
                    <a href="#" class="link-dark" onclick="event.preventDefault
                    document.getElementById('destroy-post-form').submit();"><i class="bi bi-trash3 fs-5"></i>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" id="destroy-post-form">
                        @csrf
                        @method('delete')
                    </form>
                    </a>
                </td>
            </tr>
        </tbody>

        @endforeach

    </table>

    @include('modal.create')
  
    
</div>