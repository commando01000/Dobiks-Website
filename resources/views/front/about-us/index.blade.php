@extends('layouts.front.app')
@section('title', 'About Us')
@section('content')
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
                    {{-- <div class="col-md-6 mt-5">
                        <div class="inline-container d-flex align-items-center flex-row">
                            <span class="d-inline-block content-section__description ui text size-textmd">ABOUT</span>
                            <div class="ms-3 content-section__divider"></div>
                        </div>
                        <div class="services-section__content pt-1">
                            <h2 class="content-section__subtitle ui heading size-headingmd">
                                A Behind-the-Scenes Look at Our Agency
                            </h2>
                            <p class="content-section__description fs-6 pt-2">At Dopiks, we see a world where every brand
                                has the power to connect with its audience in a
                                meaningful way. We want to help businesses tell their stories and reach their full potential
                                through innovative digital marketing strategies</p>
                        </div>
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-9">
                                <div class="progress-bars-section overflow-visible pt-2">
                                    <p class="content-section__description ui text size-textmd">CREATIVE DESIGNS</p>
                                    <div style="height: 5px;" class="progress overflow-visible mb-2" role="progressbar"
                                        aria-label="Success example" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar" style="width: 100%">
                                            <span style="top: -15px" class="mb-2 position-absolute">100%</span>
                                        </div>
                                    </div>
                                    <p class="content-section__description ui text size-textmd">MOTION GRAPHICS</p>

                                    <div style="height: 5px;" class="progress overflow-visible mb-2" role="progressbar"
                                        aria-label="Info example" aria-valuenow="97" aria-valuemin="0" aria-valuemax="97">
                                        <div class="progress-bar" style="width: 97%">
                                            <span style="top: -15px" class="mb-2 position-absolute">97%</span>
                                        </div>
                                    </div>
                                    <p class="content-section__description ui text size-textmd">VIDEO PRODUCTION</p>
                                    <div style="height: 5px;" class="progress overflow-visible mb-2" role="progressbar"
                                        aria-label="Warning example" aria-valuenow="98" aria-valuemin="0"
                                        aria-valuemax="98">
                                        <div class="progress-bar" style="width: 98%">
                                            <span style="top: -15px" class="mb-2 position-absolute">98%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="content-section__column--secondary">
                                    <p class="content-section__button pt-2 ui text size-btn_text">
                                        CONTACT US
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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
                                            {{-- <img src="{{ asset('assets/front_assets/images/so3ody.jpeg') }}"
                                            class="w-100 object-fit-cover" style="min-height: 400px;" alt="so3ody"> --}}
                                            <img src="{{ Illuminate\Support\Facades\Storage::url($testimonial->image) }}"
                                                class="w-100 object-fit-cover" style="min-height: 400px;" alt="so3ody">
                                        </div>
                                        <div class="col-md-8 mt-5 pt-5">
                                            <div
                                                class="carousel-header w-100 pb-5 d-flex flex-row align-items-center justify-content-between">
                                                <div>
                                                    <div class="quote-container">
                                                        <span class="quote"></span>
                                                        {{-- before --}}
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
                                            {{-- <p class="content-section__description">An interior design agency can create content
                                            that showcases its work, highlights
                                            design <br> trends, and provides educational resources for clients and
                                            followers.
                                            Some
                                            potential content <br> ideas for an interior design agency An interior design
                                            agency
                                            can
                                            create content that <br> showcases its work, highlights design trends, and
                                            provides
                                            educational resources for clients <br> and followers. Some potential content
                                            ideas
                                        </p> --}}

                                            <p class="content-section__description">
                                                {{ $testimonial->getTranslation('desc', app()->getLocale()) }}
                                            </p>
                                            <div style="width: 40px" class="mb-3 content-section__divider"></div>
                                            <span {{-- class="d-inline-block content-section__description ui text size-textmd fs-5">Ahmed
                                            Bakry</span> --}}
                                                class="d-inline-block content-section__description ui text size-textmd fs-5">{{ $testimonial->name }}</span>
                                            <br>
                                            {{-- <p style="font-size: 15px"
                                            class="d-inline-block content-section__description ui text size-textmd">From
                                            USA
                                        </p> --}}
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
                    {{-- <div class="row gy-5">
                        <div class="col-md-4">
                            <div style="min-height: 345px" class="card p-5">
                                <div class="card-body">
                                    <p class="w-75 fs-6 content-section__subtitle ui heading size-headingmd">
                                        Sustainable Design: How to Create an…
                                    </p>
                                    <br>
                                    <div style="height: 3px" class="section__divider"></div>
                                    <br>
                                    <p class="w-100 fs-6 content-section__description">An interior design agency can create
                                        content that showcases its…</p>
                                    <br>
                                    <p>Learn more <span class="arrow">→</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="min-height: 345px" class="card p-5">
                                <div class="card-body">
                                    <p class="w-75 fs-6 content-section__subtitle ui heading size-headingmd">
                                        The Art of Accessorizing: Adding the…
                                    </p>
                                    <br>
                                    <div style="height: 3px" class="section__divider"></div>
                                    <br>
                                    <p class="w-100 fs-6 content-section__description">An interior design agency can create
                                        content that showcases its…</p>
                                    <br>
                                    <p>Learn more <span class="arrow">→</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="min-height: 345px" class="card p-5">
                                <div class="card-body">
                                    <p class="w-75 fs-6 content-section__subtitle ui heading size-headingmd">
                                        Color Psychology in Interior Design: How…
                                    </p>
                                    <br>
                                    <div style="height: 3px" class="section__divider"></div>
                                    <br>
                                    <p class="w-100 fs-6 content-section__description">An interior design agency can create
                                        content that showcases its…</p>
                                    <br>
                                    <p>Learn more <span class="arrow">→</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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
                    {{-- <div class="mt-4">
                        {{ $allBlogs->links() }} <!-- Pagination links -->
                    </div> --}}
                </div>
            </section>
        </main>
    </section>
@endsection
