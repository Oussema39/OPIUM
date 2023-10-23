<!DOCTYPE html>
<html lang="en">
    @include('vitrine.head')
    @yield('css')
    <body class="enable_drox_coursor">
        <div class="preloader-wrap">
            <div class="loader_bar"></div>
            <div id="precent"></div>
        </div>
        @include('vitrine.headerp')
        
        @yield('content')

        @include('vitrine.footerp')
        
        

        @include('vitrine.script')
        @yield('js')
    </body>
</html>