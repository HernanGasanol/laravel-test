<?php
$img="https://imagenes.elpais.com/resizer/clttYw8X1cSZmd9Ej5F2NFgH-WY=/1960x1470/cloudfront-eu-central-1.images.arcpublishing.com/prisa/ICWTJEOAHJBRXAPAO4ACVRSTQ4.jpg";
$img1="https://www.cic.cl/dw/image/v2/BDXB_PRD/on/demandware.static/-/Sites-CIC_CL-Library/es_CL/dw8b1821c5/BLOG/box%20spring%20grand%20premium/GP.jpg";
$img2="https://www.cic.cl/dw/image/v2/BDXB_PRD/on/demandware.static/-/Sites-CIC_CL-Library/es_CL/dw8b1821c5/BLOG/box%20spring%20grand%20premium/GP.jpg";

$item=[$img,$img1,$img2];
 
?>

@section('swipper')




  

    <!-- Swiper -->
    <div class="swiper mySwiper relative">
      <div class="swiper-wrapper h-full">
        <div class="swiper-slide flex gap-2 h-full">
        <div class="relative   w-full h-full ">
               <img src={{$img}} alt=""  class="w-full h-full object-cover" >
               <div class="absolute top-0  bg-[#00000074] flex items-center justify-center w-full h-full" > <h4 class="text-white font-medium text-center sm:text-[30px]" >algo no se es un ejemplo</h4></div>
           </div>
           <div class="relative w-full h-full">
               <img src={{$img}} alt="" class="w-full h-full object-cover">
               <div class="absolute top-0  bg-[#00000076] flex items-center justify-center w-full h-full" > <h4 class="text-white font-medium  text-center sm:text-[30px]">algo no se es un ejemplo</h4></div>
           </div>
           <div class="relative w-full h-full">
               <img src={{$img}} alt="" class="w-full h-full object-cover">
               <div class="absolute top-0  bg-[#00000072] flex items-center justify-center w-full h-full" > <h4 class="text-white font-medium  text-center sm:text-[30px]">algo no se es un ejemplo</h4></div>
           </div>
           <div class="relative w-full h-full">
               <img src={{$img}} alt="" class="w-full h-full object-cover">
               <div class="absolute top-0  bg-[#00000073] flex items-center justify-center w-full h-full" > <h4 class="text-white font-medium text-center sm:text-[30px]">algo no se es un ejemplo</h4></div>
           </div>
        </div>

        <div class="swiper-slide flex gap-2 h-full">
        <div class="relative   w-full h-full ">
               <img src={{$img}} alt=""  class="w-full h-full object-cover" >
               <div class="absolute top-0  bg-[#00000074] flex items-center justify-center w-full h-full" > <h4 class="text-white font-medium text-center sm:text-[30px]" >algo no se es un ejemplo</h4></div>
           </div>
           <div class="relative w-full h-full">
               <img src={{$img}} alt="" class="w-full h-full object-cover">
               <div class="absolute top-0  bg-[#00000076] flex items-center justify-center w-full h-full" > <h4 class="text-white font-medium text-center sm:text-[30px]">algo no se es un ejemplo</h4></div>
           </div>
           <div class="relative w-full h-full">
               <img src={{$img}} alt="" class="w-full h-full object-cover">
               <div class="absolute top-0  bg-[#00000072] flex items-center justify-center w-full h-full" > <h4 class="text-white font-medium  text-center sm:text-[30px]">algo no se es un ejemplo</h4></div>
           </div>
           <div class="relative w-full h-full">
               <img src={{$img}} alt="" class="w-full h-full object-cover">
               <div class="absolute top-0  bg-[#00000073] flex items-center justify-center w-full h-full" > <h4 class="text-white font-medium  text-center sm:text-[30px]">algo no se es un ejemplo</h4></div>
           </div>
        </div>
    
    
    
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

 <!-- Swiper JS -->


    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
@endsection