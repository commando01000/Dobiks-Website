@include('layouts.front.head')
@include('layouts.front.header')
@yield('content')
@include('front.whatsapp-icon.index')
@include('front.scroll-to-top.index')
@include('layouts.front.footer')
@yield('style')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@yield('js')
@stack('scripts')
</body>

</html>
