<!DOCTYPE html>
<html lang="en-US">


@include('vitrine.head')
    @yield('css')
<!--classic-menu-->

<body class="dsn-effect-scroll dsn-cursor-effect dsn-ajax classic-menu ">

<div class="preloader">
    <div class="preloader-bar">
        <div class="preloader-progress"></div>
    </div>

    <h1 class="title v-middle">
        <span class="percent ">0</span>
        <span class="text-strok">OPIUM</span>
        <span class="text-fill">OPIUM</span>
    </h1>
</div>


@include('vitrine.header')


@yield('content')
        

        

        
@include('vitrine.footer')
        

<!-- Optional JavaScript -->
@include('vitrine.script')
@yield('js')

</body>

</html>