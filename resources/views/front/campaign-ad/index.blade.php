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
            @include('front.projects-section.projects')
            <div id="contact-us-form" style="width: 80% !important" class="contact-us-form mt-5 pt-5 m-auto">
                @include('front.contact.contact-us-form')
            </div>
    </section>

@endsection
