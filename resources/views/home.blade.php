@extends('layouts.app')

@include('navBar')
@include('header')
@include('main')
@include('footer')





@section('home')
   

       @yield('navBar')

            <!-- header -->
        <header class="w-full">
           @yield('header')
        </header>
      
       <body class="w-full h-full">

                  @yield('main')

       </body>

     <footer class="full"> 
              @yield('footer')
     </footer>
  

@endsection

