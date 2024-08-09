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


    <section class="content-section m-5 p-5 pb-0 mb-0">
        <div class="container">
            <div class="static-content d-flex justify-content-center align-items-center" style="position: relative;">
                <!-- Static Content -->
                <div class="content-section__column--primary w-100" style="position: relative; z-index: 1;">
                    <div id="staticContent">
                        <h1 id="carouselText" class="content-section__title ui heading size-heading_1 fade-text">
                            We build immersive digital experiences.
                        </h1>
                        <div class="content-section__sub-section">
                            <a class="text-decoration-none text-white" href="#section-projects">
                                <div class="content-section__column--secondary">
                                    <p class="content-section__button ui text size-btn_text">
                                        Build Now
                                    </p>
                                    <img src="{{ asset('assets/front_assets/images/img_right_arrow_2.svg') }}"
                                        alt="right arrow image" class="column__image--right-arrow" />
                                </div>
                            </a>
                            <div class="content-section__column--tertiary">
                                <div class="content-section__divider"></div>
                                <div class="content-section__column--quaternary">
                                    <h2 class="content-section__subtitle ui heading size-headingmd">
                                        Let Us Tell Your Story
                                    </h2>
                                    <p class="content-section__description ui text size-textmd">
                                        The Creative agency for international and local brands
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel for Swapping Text -->
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel"
                    style="width: 0; height: 0; overflow: hidden;">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-text="We build immersive digital experiences."></div>
                        <div class="carousel-item" data-text="We create stunning visual designs."></div>
                        <div class="carousel-item" data-text="We deliver exceptional user experiences."></div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <div class="d-flex carousel-buttons flex-column d-md-none">
                    <div>
                        <button style="width: 80px; height: 80px"
                            class="slider-navigation__icon--prev carousel-control-prev" type="button" data-bs-slide="prev"
                            data-bs-target="#carouselExampleAutoplaying">
                            <img src="{{ asset('assets/front_assets/images/img_arrow_left.svg') }}">
                        </button>
                    </div>
                    <br>
                    <div>
                        <button style="width: 80px; height: 80px"
                            class="slider-navigation__icon--next carousel-control-next" type="button" data-bs-slide="next"
                            data-bs-target="#carouselExampleAutoplaying">
                            <img src="{{ asset('assets/front_assets/images/img_arrow_right_blue_gray_100.svg') }}">
                        </button>
                    </div>
                </div>

                <div class="d-none d-md-flex carousel-buttons flex-column" style="margin-top: 20px; z-index: 2;">
                    <div>
                        <button style="width: 80px; height: 80px"
                            class="slider-navigation__icon--prev carousel-control-prev" type="button" data-bs-slide="prev"
                            data-bs-target="#carouselExampleAutoplaying">
                            <img src="{{ asset('assets/front_assets/images/img_arrow_left.svg') }}">
                        </button>
                    </div>
                    <br>
                    <div>
                        <button style="width: 80px; height: 80px"
                            class="slider-navigation__icon--next carousel-control-next" type="button" data-bs-slide="next"
                            data-bs-target="#carouselExampleAutoplaying">
                            <img src="{{ asset('assets/front_assets/images/img_arrow_right_blue_gray_100.svg') }}">
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </div>
    </div>
    </div>
    <div class="column_one pt-5 mt-5">
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
    </div>

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


@section('style')
    <style>
        .fade-text {
            transition: opacity 0.5s ease-in-out;
            opacity: 1;
        }

        .fade-out {
            opacity: 0;
        }
    </style>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselElement = document.getElementById('carouselExampleAutoplaying');
            const h1Element = document.getElementById('carouselText');

            // Bootstrap carousel event listener for slide event
            carouselElement.addEventListener('slide.bs.carousel', function(event) {
                const activeItem = event.relatedTarget;
                const newText = activeItem.getAttribute('data-text');

                // Add fade-out class
                h1Element.classList.add('fade-out');

                // Wait for the transition to end before changing text and fading in
                h1Element.addEventListener('transitionend', function() {
                    // Change text content
                    h1Element.textContent = newText;

                    // Remove fade-out class and add fade-in class
                    h1Element.classList.remove('fade-out');
                }, {
                    once: true
                });
            });
        });
    </script>
@endpush
