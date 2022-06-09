<?php
 
 $sucursal=['jndasd','addsa','asdsad'];
 
 $info=['dassda','asdasd','asdasd'];

?>
@section('navBar')

<div class="flex w-full h-max sticky top-0 z-40 bg-white px-6 mb-2  sm:justify-around  items-center  "> 
                   
         {{-- Logo --}}
        <div class="flex flex-col">
                <h1 class="text-[30px]  sm:text-[60px]  text-red-600 font-black">
                       Maxit <i class="fa-solid fa-check"></i>
                </h1>
                
                <div class="inline-flex items-center gap-2 relative bottom-4">  
                    <span class="text-red-600  text-[12px]">federación</span> <span class="text-[12px]">inmobiliaria secreta</span></div>
                </div>
                  

          {{-- Sucursales --}}

            <nav class="flex text-[12px] sm:text-[15px]  sm-w-max items-center justify-center sm:gap-10">
                    @foreach($sucursal as $sucursal_name)
                        <ul class="sm:flex sm:flex-col gap-2 items-center hidden ">
                            <li class="font-medium">sucursal</li>
                            <li class="w-max font-medium"> {{$sucursal_name}}</li> 
                        </ul>
                    @endforeach         
                                       
                <div class="group h-[20px] sm:hidden flex flex-col items-center max-w-[50px] mr-4 "> 
                    <span>Sucursales</span>
                    <ul class="  hidden group-hover:flex bg-[#00000084] bg-white ">
                        <div class=" flex flex-col gap-2 items-center mb-3 mt-2 justify-center w-[100px] bg-blur">
                            <li>Concordia</li> 
                            <li>C. Del Uruguay</li>
                            <li> San José</li>
                        </div>
                    </ul>
                </div>
                                       
                <div class="w-max flex items-center gap-2 justify-center ">
                    <a  href="#" class=" w-[0.9375rem] h-[0.9375rem] sm:h-[1.5625rem] sm:w-[1.5625rem]  rounded-[50%] bg-red-500"><i class="fa-brands fa-instagram"></i></a>
                    <a  href="#"  class="w-[0.9375rem] h-[0.9375rem]  sm:h-[1.5625rem] sm:w-[1.5625rem]  rounded-[50%] bg-red-500"><i class="fa-brands fa-instagram"></i></a>
                </div>
                  
             </nav>     
            
                  
           
        </div>

           <!-- SECOND NAV -->

          <div class="bg-slate-200 w-full h-max px-[8.75rem]">
                    
                <ul class=" sm:flex gap-2 hidden w-full items-center justify-evenly  py-[0.3125rem]   ">
                    @foreach($info as $item)
                        <li class="w-max font-medium"> {{$item}}</li> 
                    @endforeach    
                        <a href="#" class="bg-red-500 px-4 py-[0.3125rem] font-medium rounded-sm text-white">contacto</a>
                </ul>
          </div>



@endsection