<aside class="w-full md:w-1/3 flex flex-col items-center px-3">

  

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">A Propos de moi</p>
        <p class="pb-2">Passionée par le numérique et l'informatique, j'ai toujours adoré l'idée de pouvoir me réinventer chaque jour
            au gré de mes envies et de mes inspirations.
        </p>
        <a href="{{ route('about')}}" class="w-full bg-[#04BFAD] text-white font-bold text-sm uppercase rounded hover:bg-[#00BBC9] flex items-center justify-center px-2 py-3 mt-4">
            En savoir plus
        </a>
    </div>

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl text-center font-semibold pb-3">Contact</p>
       
            @if(session('success'))
                {{ session('success')}}
            @endif
        

            <form action="{{ route('send.email') }}" method="POST" class="p-6 flex flex-col justify-center">
                @csrf

                <div class="flex flex-col">
                    <label for="name" class="hidden">Votre Nom: </label>
                    <input type="name" name="name" class="w-500 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none" placeholder="Entrez votre nom...">
                </div>

                <div class="flex flex-col mt-2">
                    <label for="email" class="hidden">Adresse Mail: </label>
                    <input type="email" name="email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none" placeholder="Entrez votre adresse mail...">
                </div>

                <div class="flex flex-col mt-2">
                    <label for="message" class="hidden">Votre Demande: </label>
                    <textarea name="message" cols="30" rows="10" class="rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none" placeholder="Entrez votre demande..."></textarea>
                </div>

                <button type="submit" class="w-full bg-[#04BFAD] hover:bg-[#00BBC9] text-white font-bold text-sm py-3 px-2 rounded-lg mt-6 transition ease-in-out duration-300">
                    Envoyer
                </button>
            </form>
    
    </div>

    

</aside>