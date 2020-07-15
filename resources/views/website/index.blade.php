@include('partials._header')
<!--main website-->
<main class="container-fluid pl-0 pr-0">

    <!-- make menu -->
@include('partials._menu')
<!-- end make menu -->

    <!--    make Slider-->
@include('partials._slider')
<!--   end make Slider-->
    <!--    make About-->
@include('partials._about')
<!--    end make About-->
    <!--    make Gallery-->
@include('partials._gallery')
<!--   end make Gallery-->
    <!--     make Cantect-->
@include('partials._contact')
<!--    end make Cantect-->
    <!--     make footer-->
@include('partials._footer')

<!--    end make footer-->
</main>
<!--end main website-->


<!--js-->
<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('slider/engine1/wowslider.js')}}"></script>
<script type="text/javascript" src="{{asset('slider/engine1/script.js')}}"></script>
<script src="{{asset('plugin/dist/js/lumos-min.js')}}"></script>
<script src="{{asset('plugin/dist/js/lumos.js')}}"></script>
@yield('js')

</body>
</html>
