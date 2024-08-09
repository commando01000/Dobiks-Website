@include('layouts.front.head')
@include('layouts.front.header')
@include('front.whatsapp-icon.index')
@yield('content')
@include('layouts.front.footer')
@yield('style')
@yield('js')
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/front_assets/assets/js/home.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@stack('scripts')
</body>

</html>
