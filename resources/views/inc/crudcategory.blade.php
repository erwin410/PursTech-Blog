<div class="flex items-center justify-center h-min">
    <div class="lg:w-5/6">
        <div class="rounded mt-3">

            <h2 class="mb-4 text-xl font-bold text-gray-700">Liste des articles</h2>
            <table class="min-w-max w-full table-auto mt-5 rounded-xl">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Id</th>
                        <th class="py-3 px-6 text-left">Nom</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                @foreach ($posts as $post)
                    
                
                <tbody class="text-gray-600 text-sm font-light">
                    
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <div class="flex items-center">
                                {{-- <span class="font-medium">{{ $post->title }}</span> --}}
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                <div class="mr-2">
                                    {{-- <p>{{ Str::limit($post->description, 20) }}</p> --}}
                                </div>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            {{-- {{ $post->category->name }} --}}
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform hover:text-[#382A43] hover:scale-110">
                                    <a href="{{ route('posts.show', $post) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-[#382A43] hover:scale-110">
                                    <a href="{{ route('posts.edit', $post) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-[#382A43] hover:scale-110">
                                    <a href="#"  class="modalClick" data-bs-toggle="modal" data-bs-target="#deleteEmployeeModal" >
                                      

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>

                                      
                                    </a>
                                </div>
                            </div>
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
        </div>
                
        </div>
    </div>
</div>