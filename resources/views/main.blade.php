@include('swipper')

@section('main')


    


   <div class="flex flex-col justify-center gap-10 mt-10 items-center w-full h-full px-20">
            <div class="h-max w-full flex flex-col gap-[5px]">
                 <div class="w-[200px] h-[3px] bg-red-500"></div>
                <h3 class="font-black sm:text-[20px] mb-2">Nuestros Servicios</h3>

                <div class="h-max w-full">
                  @yield('swipper')
                 </div> 
            </div>

            <div class="h-max w-full flex flex-col gap-[5px]">
                 <div class="w-[200px] h-[3px] bg-red-500"></div>
                <h3 class="font-black sm:text-[20px] mb-2">Nuestros Servicios</h3>

                <div class="h-max w-full">
                  @yield('swipper')
                 </div> 
            </div>
   </div>


   
@endsection 