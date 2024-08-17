@extends('layouts.front.app')
@section('title', 'Home')

@section('content')
    <!-- Content-Section -->
    @if (session()->has('message'))
        <div class="message-container">
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        </div>
    @endif


    <!-- start hero section -->
    <section class="hero d-flex flex-column justify-content-center align-items-center pb-0">
        <div class="container d-flex justify-content-between align-items-center gap-4">
            <div class="col-lg-7">
                <div id="heading-carousel" class="carousel slide" data-bs-ride="carousel" data-bsinterval="2500">
                    <div class="carousel-inner">
                        <div class="carousel-item fade-in-text active">
                            <h1 class="fw-bolder">
                                We build immersive digital experiences.
                            </h1>
                        </div>
                        <div class="carousel-item fade-in-text">
                            <h1 class="fw-bolder">
                                We create stunning visual designs.
                            </h1>
                        </div>
                        <div class="carousel-item fade-in-text">
                            <h1 class="fw-bolder">
                                We deliver exceptional user experiences.
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-5 mt-5">
                    <button
                        class="section-circle btn circle-btn position-relative text-white rounded-circle border d-flex flex-column gap-2 align-items-center justify-content-center"
                        data-btn-scroll="true">
                        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                            <circle class="circle" cx="50" cy="50" r="48" stroke="#FF5101" stroke-width="2"
                                fill="none" />
                        </svg>
                        <p class="text-uppercase">Build Now</p>
                        <img class="img-fluid" src="{{ asset('assets/front_assets/images/down-arrow.svg') }}"
                            alt="build now">
                    </button>
                    <div class="hero-desc position-relative">
                        <h2 class="fw-bold pt-4">Let Us Tell Your Story</h2>
                        <p class="text-light-gray">The Creative agency for international and local brands</p>
                    </div>
                </div>
            </div>
            <div class="controls d-flex flex-column gap-4 justify-content-center">
                <button
                    class="btn circle-btn position-relative border rounded-circle d-flex justify-content-center align-items-center"
                    data-btn-scroll="true" data-bs-target="#heading-carousel" data-bs-slide="prev">
                    <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                        <circle class="circle" cx="50" cy="50" r="48" stroke="#FF5101" stroke-width="2"
                            fill="none" />
                    </svg><img class="img-fluid" src="{{ asset('assets/front_assets/images/prev-left.svg') }}">
                </button>
                <button
                    class="btn circle-btn position-relative border rounded-circle d-flex justify-content-center align-items-center"
                    data-btn-scroll="true" data-bs-target="#heading-carousel" data-bs-slide="next">
                    <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                        <circle class="circle" cx="50" cy="50" r="48" stroke="#FF5101" stroke-width="2"
                            fill="none" />
                    </svg><img class="img-fluid" src="{{ asset('assets/front_assets/images/next-right.svg') }}">
                </button>
            </div>
        </div>
        <div><img class="img-fluid" src="{{ asset('assets/front_assets/images/hero-bg.png') }}" alt="bg"></div>
    </section>
    <!-- end hero section -->


    {{-- <div class="column_one pt-5 mt-5">
        <div class="column_seven">
            <img src="{{ asset('assets/front_assets/images/img_mask_group.png') }}" alt="image" class="image" />
        </div>
        <div class="row_five">
            <div class="row-four">
                <section class="big-carousel-section">
                    <div class="container-fluid">
                        <div id="carouselExample2Autoplaying"
                            class="carousel slide d-flex flex-column justify-content-center align-items-center"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- First carousel item with your existing content -->
                                @foreach ($sliders->chunk(4) as $chunk)
                                    <div class="carousel-item @if ($loop->first) active @endif ">
                                        <div style="z-index: 99999" class="row flex-wrap gy-2 align-items-center">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row gy-4">
                                                    @foreach ($chunk as $slider)
                                                        <div class="col-md-3">
                                                            <img src="{{ Storage::url($slider->image) }}"
                                                                alt="{{ $slider->title }}">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-flex pt-2 w-100 justify-content-between carousel-buttons flex-row">
                                <div>
                                    <button style="width: 120px; height: 120px; border-radius: 60px; cursor: pointer;"
                                        class="slider-navigation__icon--prev carousel-control-prev" type="button"
                                        data-bs-slide="prev" data-bs-target="#carouselExample2Autoplaying">
                                        <img src="{{ asset('assets/front_assets/images/img_arrow_left.svg') }}">
                                    </button>
                                </div>
                                <div class="ps-2">
                                    <button style="width: 120px; height: 120px; border-radius: 60px; cursor: pointer;"
                                        class="slider-navigation__icon--next carousel-control-next" type="button"
                                        data-bs-slide="next" data-bs-target="#carouselExample2Autoplaying">
                                        <img
                                            src="{{ asset('assets/front_assets/images/img_arrow_right_blue_gray_100.svg') }}">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="big-carousel-section-phone d-none">
                    <div class="container-fluid">
                        <div id="carouselExample3Autoplaying"
                            class="carousel slide d-flex flex-column justify-content-center align-items-center"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- First carousel item with your existing content -->
                                @foreach ($sliders->chunk(1) as $chunk)
                                    <div class="carousel-item @if ($loop->first) active @endif ">
                                        <div style="z-index: 99999" class="row flex-wrap gy-2 align-items-center">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row gy-4">
                                                    @foreach ($chunk as $slider)
                                                        <div class="col-md-3">
                                                            <img src="{{ Storage::url($slider->image) }}"
                                                                alt="{{ $slider->title }}">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-flex pt-2 w-100 justify-content-between carousel-buttons flex-row">
                                <div>
                                    <button style="width: 120px; height: 120px; border-radius: 60px; cursor: pointer;"
                                        class="slider-navigation__icon--prev carousel-control-prev" type="button"
                                        data-bs-slide="prev" data-bs-target="#carouselExample3Autoplaying">
                                        <img src="{{ asset('assets/front_assets/images/img_arrow_left.svg') }}">
                                    </button>
                                </div>
                                <div class="ps-2">
                                    <button style="width: 120px; height: 120px; border-radius: 60px; cursor: pointer;"
                                        class="slider-navigation__icon--next carousel-control-next" type="button"
                                        data-bs-slide="next" data-bs-target="#carouselExample3Autoplaying">
                                        <img
                                            src="{{ asset('assets/front_assets/images/img_arrow_right_blue_gray_100.svg') }}">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div> --}}

    <!-- start album section -->
    <section>
        <div data-swiperClass=".album" data-slidesToShow="4" data-spaceBetweenSlides="20"
            class="album swiper position-relative px-1">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide"><img class="img-fluid w-100 h-100" src="{{ Storage::url($slider->image) }}"
                            alt="{{ $slider->title }}">
                    </div>
                @endforeach
            </div>

            <div class="controls d-flex gap-5 align-items-center justify-content-between my-5">
                <button class="btn swiper-control swiper-prev">
                    <p class="btn circle-btn position-relative border rounded-circle d-inline-flex justify-content-center align-items-center me-4"
                        data-btn-scroll="true">
                        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                            <circle class="circle" cx="50" cy="50" r="48" stroke="#FF5101" stroke-width="2"
                                fill="none" />
                        </svg><img class="img-fluid" src="{{ asset('assets/front_assets/images/prev-left.svg') }}">
                    </p>
                    <span class="text-white">Previous Slide</span>
                </button>
                <button class="btn swiper-control swiper-next">
                    <span>Next Slide</span>
                    <p class="btn circle-btn position-relative border rounded-circle d-inline-flex justify-content-center align-items-center ms-4"
                        data-btn-scroll="true">
                        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                            <circle class="circle" cx="50" cy="50" r="48" stroke="#FF5101" stroke-width="2"
                                fill="none" />
                        </svg>
                        <img class="img-fluid" src="{{ asset('assets/front_assets/images/next-right.svg') }}">
                    </p>
                </button>
            </div>
        </div>
    </section>
    <!-- end album section -->

    <!-- Section-Projects -->
    @include('front.projects-section.projects')
    <!-- End Section-Projects -->
    <!-- Section-Clients -->
    @include('front.clients-section.clients')
    <!-- End Section-Clients -->
    {{-- Section-Leadership --}}
    @include('front.leaderships.section-leadership')
    {{-- End Section-Leadership --}}
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
@endpush
