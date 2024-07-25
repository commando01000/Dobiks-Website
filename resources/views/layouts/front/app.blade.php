@include('layouts.front.head')
@include('layouts.front.header')
@yield('content')
@include('layouts.front.footer')
@yield('js')
@yield('style')
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/front_assets/assets/js/home.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@stack('scripts')
</body>

</html>
