
<?php

 $list=['Concordia' => 'avenida', 'Colón' => 'escudore avenida colón','Hotel' => 'trivago', 'maluma' => 'asdsadas']


?>


@section('footer')
      <div class="w-full flex flex-col justify-center items-center mt-10 h-[300px] gap-10 bg-slate-200">
        
            <div class="h-max">
                    <h2 class="font-bold sm:text-[40px]">DIRECCIONES Y HORARIOS</h2>
            
            </div>
       
        
        <div class="h-max flex gap-10 justify-center text-center items-center">
             @foreach($list as $location => $name)
                <ul class="flex flex-col gap-4 ">
                    <span class="font-medium"> {{$location}}</span>
                    <div class="flex gap-2">
                       <span class="bg-red-500 p-2 h-[20px] w-[20px] rounded-[50%]"></span> <span>{{$name}} </span>  
                    </div> 
                </ul>
             @endforeach

        </div >

       
        <div class="flex flex-col gap-[5px] text-center  h-max">
                <span>2022 - derechos reservados</span>
                <span>texto ilegible largo</span>
        </div>
 </div>



@endsection