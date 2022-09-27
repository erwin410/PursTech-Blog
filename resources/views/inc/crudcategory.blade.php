
<div class="container">
    <h2 class="mb-4 fs-3">Liste des catégories</h2>
    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            @foreach ($categories as $category)
                
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="#" class="link-dark" ><i class="bi bi-pencil fs-5 me-3"></i></a>
                    <a href="#" class="link-dark" ><i class="bi bi-trash3 fs-5"></i></a>
                </td>
            </tr>
        </tbody>

        @endforeach

    </table>
    
</div>