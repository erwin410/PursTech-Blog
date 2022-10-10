<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  text-gray-800 leading-tight">
            {{ __('A Propos') }}
        </h2>
    </x-slot>

    <div class="w-full mb-20 py-12 border-t border-b bg-black">

   </div>

    <section class="pt-5 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
        <div class="container">
           <div class="flex flex-wrap justify-between items-center -mx-4">
              <div class="w-full lg:w-6/12 px-4">
                 <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                       <div class="py-3 sm:py-4">
                          <img
                             src="https://cdn.pixabay.com/photo/2021/11/02/19/32/basketball-6763978_1280.jpg"
                             alt=""
                             class="rounded-2xl w-full"
                             />
                       </div>
                       <div class="py-3 sm:py-4">
                          <img
                             src="https://cdn.pixabay.com/photo/2022/09/07/14/56/ferns-7438928_1280.jpg"
                             alt=""
                             class="rounded-2xl w-full"
                             />
                       </div>
                    </div>
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                       <div class="my-4 relative z-10">
                          <img
                             src="https://cdn.pixabay.com/photo/2018/07/23/06/10/man-3556090_1280.jpg"
                             alt=""
                             class="rounded-2xl w-full"
                             />
                        
                       </div>
                    </div>
                 </div>
              </div>
              <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                 <div class="mt-10 lg:mt-0">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                    Présentation
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl text-dark mb-8">
                       Introduction, présentation personnel.
                    </h2>
                    <p class="text-base text-body-color mb-8">
                       Je me présente Erwin Pateux, 24ans passioné 
                       par l'informatique, j'ai toujours adoré l'idée de 
                       pouvoir me réinventer chaque jour au gré de mes envies
                       et des mes inspirations.
                    </p>
                    <p class="text-base text-body-color mb-8">
                       Après l'obtention de mon Bac Pro Gestion Administration
                       je me suis orienté dans le numérique et le développemnt qui
                       m'as toujours passioné.
                    </p>

                    <p class="text-base text-body-color mb-12">
                        L'idée de ce blog est de permet de partager avec vous les actualités
                        liée au numérique, à l'informatique, au sport et à l'automobile.
                        Vous pouvez laissez un commentaire sur chaque article pour donner votre
                        point vue et avis sur les différents articles qui seront publier sur le 
                        blog.
                  </p>
                
                 </div>
              </div>
           </div>
        </div>
     </section>

     @include('inc.footer')
</x-app-layout>