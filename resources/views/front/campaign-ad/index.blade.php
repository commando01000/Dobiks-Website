@extends('layouts.front.app')
@section('title', 'Campaign Ads')


@section('content')

    <section id="campaign-ad" class="w-100 mt-0 p-1 overflow-hidden">
        <main class="container-fluid ps-0 pe-0">
            <div class="service-details m-5 p-5">
                <div class="container-fluid">
                    <div style="width: 80% !important" class="row m-auto d-flex justify-content-between">
                        <div class="col-md-6">
                            <div class="title">
                                <h1 class="section-projects__title ui heading size-headinglg">
                                    <span class="section-projects__title-span">Get the offer No with 50% <span
                                            class="section-projects__title-span-1">Discount&nbsp;</span>
                                    </span>
                                </h1>
                            </div>
                            <br>
                            <div class="description">
                                <p class="content-section__description fs-6">
                                    {{ $service->short_description }}
                                </p>
                                <br>
                                <div class="service-detail content-section__description fs-6 w-100">
                                    <?php
                                    $var = html_entity_decode($service->description);

                                    echo $var;

                                    ?>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="service-image text-end">
                                <?php
                                $var = html_entity_decode($service->emdlink);

                                echo $var;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div style="width: 80% !important" class="ad-controls m-auto mt-4 d-flex">
                        <div style="display: flex; gap: 20px;">
                            <div>
                                <a name="FACEBOOK" id="FACEBOOK" class="btn w-100 border-0"
                                    style="color: white; background-color: #ff5101" href="#section-projects"
                                    role="button">Check latest projects</a>
                            </div>
                            <div>
                                <a name="FACEBOOK" id="FACEBOOK" class="btn ps-5 pe-5 w-100 border-0"
                                    style="color: white; background-color: transparent; border: 1px solid #ff5101 !important"
                                    href="#contact-us-form" role="button">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 80% !important" class="our-trusted-clients m-auto">
                <div class="container-fluid">
                    <div class="row gy-4 justify-content-start">
                        <div class="col-md-12">
                            <h5 style="font-size: 35px !important"
                                class="section-projects__title ui heading size-headinglg">
                                <span class="section-projects__title-span">Our <span
                                        class="section-projects__title-span-1">Clients&nbsp;</span>
                                </span>
                            </h5>
                        </div>
                        <div class="col-md-12">
                            <div class="row gy-3 justify-content-start">
                                <div class="col-md-3 text-start">
                                    <img src="{{ asset('assets/front_assets/images/client_1.png') }}" alt="">
                                </div>
                                <div class="col-md-3 text-start">
                                    <img src="{{ asset('assets/front_assets/images/client_2.png') }}" alt="">
                                </div>
                                <div class="col-md-3 text-start">
                                    <img src="{{ asset('assets/front_assets/images/client_3.png') }}" alt="">
                                </div>
                                <div class="col-md-3 text-start">
                                    <img src="{{ asset('assets/front_assets/images/client_1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- services features -->
    <section class="pt-5 mt-5">
        <div class="container-fluid">
        <h5 style="font-size: 35px !important"
            class="section-projects__title ui heading size-headinglg">
            <span class="section-projects__title-span">Service <span
                    class="section-projects__title-span-1">Features&nbsp;</span>
            </span>
        </h5>
        <div class="row text-white mt-5">
            <div class="col-md-4 gap-3 d-flex flex-column align-items-center text-center align-items-md-start text-md-start gap-3">
                <span class="service-feature-number">01</span>
                <h6 class="fs-4">Words that sell, we write</h6>
                <p>Our content writing services provide engaging and informal written content for your social media profiles, website or blog, tailored to your audience and brand voice.</p>
            </div>
            <div class="col-md-4 gap-3 d-flex flex-column align-items-center text-center align-items-md-start text-md-start gap-3 mt-md-5">
                <span class="service-feature-number">02</span>
                <h6 class="fs-4">Words that sell, we write</h6>
                <p>Our content writing services provide engaging and informal written content for your social media profiles, website or blog, tailored to your audience and brand voice.</p>
            </div>
            <div class="col-md-4 gap-3 d-flex flex-column align-items-center text-center align-items-md-start text-md-start gap-3">
                <span class="service-feature-number">03</span>
                <h6 class="fs-4">Words that sell, we write</h6>
                <p>Our content writing services provide engaging and informal written content for your social media profiles, website or blog, tailored to your audience and brand voice.</p>
            </div>
        </div>
        <div class="d-flex justify-content-center my-5">
            <div class="team-section__action-row">
                            <div class="section__feature-bg"></div>
                            <div class="team-section__action-content">
                                <p class="section__call-to-action-text ui text size-btn_text">
                                    <a class="text-white" href="">Load more Features<a>
                                </p>
                                <img src="{{ asset('assets/front_assets/images/img_arrow.svg') }}" alt="arrow image"
                                    class="section__call-to-action-icon" />
                            </div>
                        </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        @include('front.projects-section.projects')
    </div>
            <div id="contact-us-form" style="width: 80% !important" class="contact-us-form mt-5 pt-5 m-auto">
                @include('front.contact.contact-us-form')
            </div>
    </section>

@endsection
