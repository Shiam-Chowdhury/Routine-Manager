<!DOCTYPE html>
<html lang="en">

    @include('partials._head')

    <body>

    <!-- Default Bootstrap Navbar -->

        @include('partials._nav')

       {{--  <div class="container"> --}}
            
            @yield('content')
            @yield('style')
            
        <!-- end of .container -->
        @include('partials._javascript')
        <!--@include('partials._footer')-->
        



    </body>

</html>
