@extends('layouts.front.app')

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
            <div style="z-index: 99999" class="row flex-wrap gy-2 align-items-center">
                <div class="col-md-6 col-sm-12">
                    <div class="content-section__column--primary w-100">
                        <h1 class="content-section__title ui heading size-heading_1">
                            We build immersive digital experiences.
                        </h1>
                        <div class="content-section__sub-section">
                            <div class="content-section__column--secondary">
                                <p class="content-section__button ui text size-btn_text">
                                    Build Now
                                </p>
                                <img src="{{ asset('assets/front_assets/images/img_right_arrow_2.svg') }}"
                                    alt="right arrow image" class="column__image--right-arrow" />
                            </div>
                            <div class="content-section__column--tertiary">
                                <div class="content-section__divider"></div>
                                <div class="content-section__column--quaternary">
                                    <h2 class="content-section__subtitle ui heading size-headingmd">
                                        Let Us Tell Your Story
                                    </h2>
                                    <p class="content-section__description ui text size-textmd">
                                        The Creative agency for international and
                                        local brands
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="navigation align-items-lg-end align-items-sm-center w-100">
                        <div class="navigation__column--left">
                            <img src="{{ asset('assets/front_assets/images/img_arrow_left.svg') }}" alt="left arrow"
                                class="navigation__arrow--left" />
                        </div>
                        <div class="navigation__column--right">
                            <img src="{{ asset('assets/front_assets/images/img_arrow_left.svg') }}" alt="left arrow"
                                class="navigation__arrow--left" />
                        </div>
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
                {{-- Owl-Carousel-Section --}}
                {{-- @include('front.owl-carousel.index') --}}
            </div>
        </div>
    </div>
    </div>
    <div class="slider-navigation">
        <div class="slider-navigation__controls--prev">
            <button class="slider-navigation__icon--prev">
                <img src="{{ asset('assets/front_assets/images/img_arrow_left.svg') }}" />
            </button>
            <p class="slider-navigation__text--prev ui text size-textlg">
                prev Slide
            </p>
        </div>
        <div class="slider-navigation__controls--next">
            <p class="slider-navigation__text--prev ui text size-textlg">
                Next Slide
            </p>
            <button class="slider-navigation__icon--next">
                <img src="{{ asset('assets/front_assets/images/img_arrow_right_blue_gray_100.svg') }}" />
            </button>
        </div>
    </div>
    <!-- Section-Projects -->
    @include('front.projects-section.projects')
    <!-- End Section-Projects -->
    <!-- Section-Clients -->
    @include('front.clients-section.clients')
    <!-- End Section-Clients -->
    <div class="row_seven">
        <div class="team-section">
            <div class="team-section__header">
                <div class="team-section__header-content">
                    <div class="team-section__title-row">
                        <p class="section__title ui text size-btn_text">Our Team</p>
                        <div class="team-section__divider"></div>
                    </div>
                    <div class="section__header">
                        <h2 class="team-section__subtitle ui heading size-headings">
                            Meet Our
                        </h2>
                        <h3 class="section__highlight ui heading size-headinglg">
                            Leadership
                        </h3>
                    </div>
                </div>
                <div>
                    <div class="team-section__action-row">
                        <div class="section__feature-bg"></div>
                        <div class="team-section__action-content">
                            <p class="section__call-to-action-text ui text size-btn_text">
                                <a class="text-white" href="{{ route('about-us') }}"> view all Leadership<a>
                            </p>
                            <img src="{{ asset('assets/front_assets/images/img_arrow.svg') }}" alt="arrow image"
                                class="section__call-to-action-icon" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-section__members">
                @foreach ($leaderships as $leadership)
                    <div class="user-profile">
                        <img src="{{ Storage::url($leadership->photo) }}" alt="profile image"
                            class="user-profile__image @if ($loop->index % 2 != 0) pt-4 @endif">
                        <p class="user-profile__name ui text size-textxl">
                            {{ $leadership->name }}
                        </p>
                        <p class="user-profile__role ui text size-texts">
                            {{ $leadership->position }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
