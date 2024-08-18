@extends('layouts.front.app')
@section('title', 'About Us')
{{-- @section('content')
    <section id="section-services" class="p-1">
        <main class="container-fluid overflow-hidden">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    About Us
                </h1>
                <small class="content-section__description fs-6">Home / About Us</small>
            </div>
            <section class="about-us-section w-75 m-auto pb-5">
                <div class="row flex-row gx-5">
                    <div class="col-md-6">
                        <div class="image_1 position-relative">
                            <img src="{{ asset('assets/front_assets/images/placeholder.png') }}" alt="image">
                            <div class="image_2 position-absolute bottom-0 start-50">
                                <img src="{{ asset('assets/front_assets/images/placeholder_1.png') }}" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-5">
                        <div class="inline-container d-flex align-items-center flex-row">
                            <span class="d-inline-block content-section__description ui text size-textmd">
                                {{ ucfirst($about->title) }}</span>
                            <div class="ms-3 content-section__divider"></div>
                        </div>
                        <div class="services-section__content pt-1">
                            <h2 class="content-section__subtitle ui heading size-headingmd">
                                {{ $about->short_description }}
                            </h2>
                            <p class="content-section__description fs-6 pt-2">
                                {{ $about->description }}
                            </p>
                        </div>
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-9">
                                <div class="progress-bars-section overflow-visible pt-2">
                                    @foreach ($about->details as $detail)
                                        <p class="content-section__description ui text size-textmd">{{ $detail->category }}
                                        </p>
                                        <div style="height: 5px;" class="progress overflow-visible mb-2" role="progressbar"
                                            aria-label="{{ $detail->category }} example"
                                            aria-valuenow="{{ $detail->number }}" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: {{ $detail->number }}%">
                                                <span style="top: -15px"
                                                    class="mb-2 position-absolute">{{ $detail->number }}%</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('contact') }}" style="text-decoration: none;">
                                    <div style="cursor: pointer;" class="content-section__column--secondary">
                                        <p style="margin-top: 50px"
                                            class="content-section__button pt-2 ui text size-btn_text">
                                            <span class="text-decoration-none text-white">CONTACT US</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="carousel-section mt-5 pt-5 pb-5 position-relative">

                <div class="container">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($testimonials as $testimonial)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <div class="row gx-5 align-items-center w-100">
                                        <div class="col-md-4">

                                            <img src="{{ Illuminate\Support\Facades\Storage::url($testimonial->image) }}"
                                                class="w-100 object-fit-cover" style="min-height: 400px;" alt="so3ody">
                                        </div>
                                        <div class="col-md-8 mt-5 pt-5">
                                            <div
                                                class="carousel-header w-100 pb-5 d-flex flex-row align-items-center justify-content-between">
                                                <div>
                                                    <div class="quote-container">
                                                        <span class="quote"></span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <div class="pe-5">
                                                        <button style="width: 80px; height: 80px"
                                                            class="slider-navigation__icon--prev carousel-control-prev"
                                                            type="button" data-bs-slide="prev"
                                                            data-bs-target="#carouselExampleAutoplaying">
                                                            <img
                                                                src="{{ asset('assets/front_assets/images/img_arrow_left.svg') }}">
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button style="width: 80px; height: 80px"
                                                            class="slider-navigation__icon--next carousel-control-next"
                                                            type="button" data-bs-slide="next"
                                                            data-bs-target="#carouselExampleAutoplaying">
                                                            <img
                                                                src="{{ asset('assets/front_assets/images/img_arrow_right_blue_gray_100.svg') }}">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>


                                            <p class="content-section__description">
                                                {{ $testimonial->getTranslation('desc', app()->getLocale()) }}
                                            </p>
                                            <div style="width: 40px" class="mb-3 content-section__divider"></div>
                                            <span
                                                class="d-inline-block content-section__description ui text size-textmd fs-5">{{ $testimonial->name }}</span>
                                            <br>
                                            <p style="font-size: 15px"
                                                class="d-inline-block content-section__description ui text size-textmd">
                                                {{ $testimonial->title }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <section class="our-trusted-clients p-5 m-5">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-2">
                            <p class="fs-6 content-section__subtitle ui heading size-headingmd">700+ Our Trusted Client</p>
                        </div>
                        <div class="col-md-10">
                            <div class="row gy-3 justify-content-center">
                                <div class="col-md-3 text-center">
                                    <img src="{{ asset('assets/front_assets/images/client_1.png') }}" alt="">
                                </div>
                                <div class="col-md-3 text-center">
                                    <img src="{{ asset('assets/front_assets/images/client_2.png') }}" alt="">
                                </div>
                                <div class="col-md-3 text-center">
                                    <img src="{{ asset('assets/front_assets/images/client_3.png') }}" alt="">
                                </div>
                                <div class="col-md-3 text-center">
                                    <img src="{{ asset('assets/front_assets/images/client_1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="meet-our-leadership p-5 m-5">
                <div class="container">
                    <div class="team-section__header">
                        <div class="section__header align-items-baseline">
                            <div class="section__header-row">
                                <p class="section__title ui text size-btn_text">Our Team</p>
                                <div class="section__divider"></div>
                            </div>
                            <h2 class="w-100 section-projects__title ui heading size-headinglg">
                                Meet Our
                            </h2>
                            <h3 class="w-100 section-projects__title ui heading size-headinglg">
                                Leadership
                            </h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        @foreach ($leaderships as $leadership)
                            <div class="col-md-3">
                                <a href="{{ route('team-details', $leadership->id) }}" class="user-profile-link">
                                    <div class="user-profile">
                                        <img src="{{ Storage::url($leadership->photo) }}" alt="{{ $leadership->name }}"
                                            class="user-profile__image @if ($loop->index % 2 != 0) pt-4 @endif">
                                        <p class="user-profile__name ui text size-textxl">
                                            {{ $leadership->name }}
                                        </p>
                                        <p class="user-profile__role ui text size-texts">
                                            {{ $leadership->position }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="milestones-achieved" class="w-100 pt-5 mt-5 pb-5 mb-5">
                <div class="container pt-5 pb-5">
                    <div class="row pt-5">
                        <div class="col-md-6">
                            <p class="content-section__subtitle ui heading size-headingmd">
                                {{ $statistics->short_description }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="content-section__description">{{ $statistics->description }}</p>
                        </div>
                    </div>
                    <div class="row pt-5 pb-5 text-center justify-content-center">
                        @foreach ($statistics->details as $detail)
                            <div class="col-md-4">
                                <p class="fs-1 content-section__subtitle ui heading size-headingmd">
                                    {{ $detail->number }} +
                                </p>
                                <br>
                                <p class="user-profile__name ui text size-textxl">
                                    {{ $detail->category }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="blog" class="w-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="content-section__subtitle ui heading size-headingmd">Sharing Our Knowledge and
                                Passion for Interiors</p>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                    <div class="row gy-5">
                        @if (isset($allBlogs))
                            @foreach ($allBlogs as $blog)
                                <div class="col-md-4">
                                    <div style="min-height: 350px; max-height: 350px" class="card p-5">
                                        <div class="card-body">
                                            <p class="w-75 fs-6 content-section__subtitle ui heading size-headingmd">
                                                {{ Str::limit($blog->getTranslation('title', app()->getLocale()), 45) }}
                                                {{ Str::limit($blog->getTranslation('short_description', app()->getLocale()), 45) }}
                                            </p>
                                            <br>
                                            <div style="height: 3px" class="section__divider"></div>
                                            <br>
                                            <p class="w-100 fs-6 content-section__description">
                                                {{ Str::limit($blog->getTranslation('normal_description', app()->getLocale()), 60) }}
                                            </p>
                                            <br>
                                            <p>Learn more <a class="arrow text-white text-decoration-none"
                                                    href="{{ route('view.blog', $blog->slug) }}">→</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </section>
        </main>
    </section>
@endsection --}}

@section('content')

    <!-- start title -->
    <section>
        <div class="container">
            <div class="main-title">
                <h1><span>About Us</h1>
                <div>
                    <a href="">Home</a>
                    <span class="slash">/</span>
                    <a href="">ABOUT US</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end title -->

    <!-- start about section -->
    <section>
        <div class="container">
            <div class="row justify-content-between align-items-center gy-4">
                <div class="col-md-5 pe-md-5">
                    <div class="position-relative">
                        <img class="img-fluid pe-md-5" src="{{ asset('assets/front_assets/images/about-bg.png') }}"
                            alt="about">
                        <img class="img-fluid position-absolute bottom-0 end-0"
                            src="{{ asset('assets/front_assets/images/about-sm.png') }}" alt="about">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="big-head">
                        <span>{{ $about->title }}</span>
                        <h2>{{ $about->short_description }}</h2>
                    </div>
                    <p class="text-light-gray">{{ $about->description }}</p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <div class="col-8 d-flex flex-column gap-4">
                            @foreach ($about->details as $detail)
                                <div>
                                    <h5 class="text-uppercase mb-0 fw-normal mb-2">{{ $detail->category }}</h5>
                                    <div class="progress-container">
                                        <div data-progress="{{ $detail->number }}%" class="progress-value number"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a href="{{ route('contact') }}"
                            class="section-circle btn circle-btn position-relative text-white rounded-circle border d-flex flex-column gap-2 align-items-center justify-content-center"
                            data-btn-scroll="true">
                            <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                                <circle class="circle" cx="50" cy="50" r="48" stroke="#FF5101"
                                    stroke-width="2" fill="none" />
                            </svg>
                            <p class="text-uppercase">contact us</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- start testimonials -->
    <section class="bg-dark-black">
        <div class="container">
            <div id="testimonials-carousel" class="carousel slide">
                <div class="carousel-inner">
                    @foreach ($testimonials as $testimonial)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <div class="row justify-content-between gap-4 gap-md-0">
                                <div class="col-lg-4 col-md-5">
                                    <img class="img-fluid w-100 h-100" src="{{ Storage::url($testimonial->image) }}"
                                        alt="">
                                </div>
                                <div class="col-lg-7 col-md-6 d-flex flex-column gap-5">
                                    <div class="d-flex justify-content-between">
                                        <img class="img-fluid quote"
                                            src="{{ asset('assets/front_assets/images/quote.png') }}" alt="quote">
                                        <div class="controls d-flex gap-4 justify-content-center">
                                            <button
                                                class="btn circle-btn position-relative border rounded-circle d-flex justify-content-center align-items-center"
                                                data-btn-scroll="true" data-bs-target="#testimonials-carousel"
                                                data-bs-slide="prev">
                                                <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                                                    <circle class="circle" cx="50" cy="50" r="48"
                                                        stroke="#FF5101" stroke-width="2" fill="none" />
                                                </svg><img class="img-fluid"
                                                    src="{{ asset('assets/front_assets/images/prev-left.svg') }}">
                                            </button>
                                            <button
                                                class="btn circle-btn position-relative border rounded-circle d-flex justify-content-center align-items-center"
                                                data-btn-scroll="true" data-bs-target="#testimonials-carousel"
                                                data-bs-slide="next">
                                                <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                                                    <circle class="circle" cx="50" cy="50" r="48"
                                                        stroke="#FF5101" stroke-width="2" fill="none" />
                                                </svg><img class="img-fluid"
                                                    src="{{ asset('assets/front_assets/images/next-right.svg') }}">
                                            </button>
                                        </div>
                                    </div>
                                    <p>{{ $testimonial->getTranslation('desc', app()->getLocale()) }}</p>
                                    <div class="testimonials-name pt-3 position-relative">
                                        <p class="text-capitalize fs-5">{{ $testimonial->name }}</p>
                                        <span class="text-light-gray">{{ $testimonial->title }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonials -->

    <!-- start client -->
    <section>
        <div class="container">
            <div class="row align-items-center gap-4 gap-md-0">
                <div class="col-md-4">
                    <p class="fs-5">
                        <span class="number">700+</span>
                        Our Trusted Client
                    </p>
                </div>
                <div class="col-md-8">
                    <div data-swiperClass=".clients" data-slidesToShow="5.4" data-spaceBetweenSlides="30"
                        class="clients swiper position-relative">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide"><img class="img-fluid w-100 h-100"
                                    src="{{ asset('assets/front_assets/images/client6.png') }}" alt="client"></div>
                            <div class="swiper-slide"><img class="img-fluid w-100 h-100"
                                    src="{{ asset('assets/front_assets/images/client7.png') }}" alt="client"></div>
                            <div class="swiper-slide"><img class="img-fluid w-100 h-100"
                                    src="{{ asset('assets/front_assets/images/client8.png') }}" alt="client"></div>
                            <div class="swiper-slide"><img class="img-fluid w-100 h-100"
                                    src="{{ asset('assets/front_assets/images/client6.png') }}" alt="client"></div>
                            <div class="swiper-slide"><img class="img-fluid w-100 h-100"
                                    src="{{ asset('assets/front_assets/images/client7.png') }}" alt="client"></div>
                            <div class="swiper-slide"><img class="img-fluid w-100 h-100"
                                    src="{{ asset('assets/front_assets/images/client8.png') }}" alt="client"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end client -->

    <!-- start leadership -->
    <section>
        <div class="container">
            <div class="big-head">
                <span>Our Team</span>
                <p>Meet Our</p>
                <h2>Leadership</h2>
            </div>
            <div class="row">
                @foreach ($leaderships as $leadership)
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <a href="{{ route('team-details', $leadership->id) }}">
                            <img class=" team-img img-fluid w-100 @if ($loop->index % 2 != 0) pt-md-3 @endif"
                                src="{{ Storage::url($leadership->photo) }}" alt="leadership">
                            <div class="text-center mt-3">
                                <p class="fs-5">{{ $leadership->name }}</p>
                                <span class="text-small text-light-gray">{{ $leadership->position }}</span>
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end leadership -->

    <!-- start milestones -->
    <section id="achievement" class="bg-dark-black">
        <div class="container">
            <div class="row align-items-center justify-content-between gap-3 gap-md-0">
                <div class="col-md-6">
                    <h2 class="text-big mb-0">{{ $statistics->short_description }}</h2>
                </div>
                <div class="col-md-5">
                    <p class="text-light-gray">{{ $statistics->description }}</p>
                </div>
            </div>
            <div class="row mt-5">
                @foreach ($statistics->details as $detail)
                    <div class="col-4 col-md-4">
                        <span data-target="{{ $detail->number }}" id="milestone"
                            class="number text-bigger fw-bold">{{ $detail->number }}
                            +</span>
                        <p class="fs-5">{{ $detail->category }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end milestones -->

    <!-- start blogs -->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 col-md-9">
                    <h2 class="text-big mb-0">Sharing Our Knowledge and Passion for Interiors</h2>
                </div>
                <div class="col-lg-5 col-md-3">
                    <a href="{{ route('see.all.blogs') }}" class="main-btn btn">view all blogs</a>
                </div>
            </div>
            <div class="row mt-4 gy-4">
                @if (isset($allBlogs))
                    @foreach ($allBlogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <a href="{{ route('view.blog', $blog->slug) }}"
                                class="blog d-block py-5 px-4 bg-dark-black rounded-1">
                                <h4>{{ Str::limit($blog->getTranslation('title', app()->getLocale()), 45) }}
                                    {{ Str::limit($blog->getTranslation('short_description', app()->getLocale()), 10) }}
                                </h4>
                                <p class="text-light-gray my-4 position-relative pt-3">
                                    {{ Str::limit($blog->getTranslation('normal_description', app()->getLocale()), 45) }}
                                </p>
                                <button class="btn text-uppercase d-flex gap-2 align-items-center p-0 position-relative">
                                    <span class="text-white">learn more</span>
                                    <img src="{{ asset('assets/front_assets/images/right-arrow.svg') }}"
                                        alt="Learn More">
                                </button>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- end blogs -->

@endsection

@push('scripts')
    <script src="assets/js/loopSwiper.js"></script>
    <script src="assets/js/progress.js"></script>
    <script src="assets/js/count.js"></script>
@endpush
