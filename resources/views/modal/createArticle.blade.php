<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Créer un article</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('posts.store') }}" method="POST" class="min-w-full">
            @csrf
            <label for="title" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Titre</label>
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
            <input id="title" name="title" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Saisissez votre titre" />
            

            <label for="image" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Image</label>
            @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
            @endif
            <input type="file" id="image" name="image" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
            
            

            
            <label for="description" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Description</label>
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
            <textarea name="description" id="description" cols="30" rows="10" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-30 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Saissisez votre description"></textarea>
            
            <div class="flex items-center justify-center w-full">
                <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Créer l'article</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>