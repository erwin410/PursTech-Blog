<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Créer une catégories</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('categories.store') }}" method="POST" class="min-w-full">
            @csrf

            <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nom</label>
            <input id="name" name="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Saisissez le nom de la catégorie" />
            
        
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-outline-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Créer</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>