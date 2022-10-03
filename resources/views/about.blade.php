<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('A Propos') }}
        </h2>
    </x-slot>

    <div class="w-full mb-20 py-12 border-t border-b bg-black">

   </div>

    <section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
        <div class="container">
           <div class="flex flex-wrap justify-between items-center -mx-4">
              <div class="w-full lg:w-6/12 px-4">
                 <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                       <div class="py-3 sm:py-4">
                          <img
                             src="https://cdn.tailgrids.com/1.0/assets/images/services/image-1.jpg"
                             alt=""
                             class="rounded-2xl w-full"
                             />
                       </div>
                       <div class="py-3 sm:py-4">
                          <img
                             src="https://cdn.tailgrids.com/1.0/assets/images/services/image-2.jpg"
                             alt=""
                             class="rounded-2xl w-full"
                             />
                       </div>
                    </div>
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                       <div class="my-4 relative z-10">
                          <img
                             src="https://cdn.tailgrids.com/1.0/assets/images/services/image-3.jpg"
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
                    Why Choose Us
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl text-dark mb-8">
                       Make your customers happy by giving services.
                    </h2>
                    <p class="text-base text-body-color mb-8">
                       It is a long established fact that a reader will be distracted
                       by the readable content of a page when looking at its layout.
                       The point of using Lorem Ipsum is that it has a more-or-less.
                    </p>
                    <p class="text-base text-body-color mb-12">
                       A domain name is one of the first steps to establishing your
                       brand. Secure a consistent brand image with a domain name that
                       matches your business.
                    </p>
                
                 </div>
              </div>
           </div>
        </div>
     </section>

     @include('inc.footer')
</x-app-layout>