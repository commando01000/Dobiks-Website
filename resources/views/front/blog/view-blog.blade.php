@extends('layouts.front.app')
@section('title', 'Blog Details' )
@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    <section id="blog-details" class="w-100 mt-0 p-1 overflow-hidden">
        <div class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    {{ $blog->title }}
                </h1>
                <small class="content-section__description fs-6">HOME / BLOG DETAILS / {{ $blog_category->name }}</small>
            </div>
            <div class="blog-content w-100">
                <div class="row m-auto mt-5 w-75 pt-5">
                    <div class="col-md-8">
                        <h1 class="content-section__title fs-5">
                            {{ Str::limit($blog->getTranslation('title', app()->getLocale()), 45) }}{{ Str::limit($blog->getTranslation('short_description', app()->getLocale()), 45) }}
                        </h1>
                        <small class="content-section__description fs-6">{{ $blog->created_at->format('jS F Y') }}</small>
                        <br>
                        <div class="blog-detail w-100">


                            <?php
                            $var = html_entity_decode($blog->description);

                            echo $var;

                            ?>

                        </div>
                        <div style="width: 100%" class="section__divider"></div>

                        <div class="footer__stack__row__eight__row__link-row">
                            <span style="line-height: 30px" class="content-section__description fs-6">Social Share :</span>
                            <a href="{{ Utility::getsettings('contact_facebook') }}"
                                class="footer__social-button--facebook">
                                <img src="{{ asset('assets/front_assets/images/img_facebook_app_symbol.svg') }}">
                            </a>
                            <a href="{{ Utility::getsettings('contact_instagram') }}" class="footer__link-button--link">
                                <img src="{{ asset('assets/front_assets/images/img_link.svg') }}">
                            </a>
                            <a href="{{ Utility::getsettings('contact_twitter') }}" class="footer__link-button--link">
                                <img src="{{ asset('assets/front_assets/images/img_trash.svg') }}">
                            </a>
                        </div>
                        {{-- <div class="blog-detail w-100">
                            <div class="blog-text">
                                <p class="fs-4 content-section__subtitle ui heading size-headingmd text-white">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work

                                </p>
                                <img class="w-100 pt-3" src="{{ asset('assets/front_assets/images/oasis.png') }}"
                                    alt="blog image">
                                <br>
                                <br>
                                <p class="fs-6 content-section__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.
                                </p>
                                <br>
                            </div>
                        </div>

                        <div class="blog-detail w-100">
                            <div class="block-images d-flex flex-row flex-nowrap">
                                <img class="w-50 pt-3" src="{{ asset('assets/front_assets/images/img_rectangle_4.png') }}"
                                    alt="blog image">
                                <img class="w-50 pt-3" src="{{ asset('assets/front_assets/images/img_rectangle_6.png') }}"
                                    alt="blog image">
                            </div>
                            <br>
                            <div class="blog-text">
                                <p class="fs-6 content-section__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.

                                </p>
                                <p class="fs-6 content-section__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.
                                </p>
                                <br>
                            </div>
                        </div>
                        <div class="blog-detail w-100">
                            <br>
                            <div class="w-100">
                                <div class="text-center quote-container">
                                    <span class="quote"></span>

                                </div>
                            </div>
                            <div class="blog-text">
                                <p class="fs-4 content-section__subtitle ui heading size-headingmd text-white">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work

                                </p>
                                <img class="w-100 pt-3" src="{{ asset('assets/front_assets/images/oasis_width.png') }}"
                                    alt="blog image">
                                <br>
                                <br>
                                <p class="fs-6 content-section__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.
                                </p>
                                <br>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-md-4">
                        <h1 style="line-height: 65px !important" class="content-section__title fs-4">Similar Post</h1>
                        <div class="row gy-5">
                            @foreach ($allBlogs as $blog)
                                <div class="col-md-12">
                                    <div style="min-height: 350px; max-height: 350px" class="card p-5">
                                        <div class="card-body">
                                            <p class="w-75 fs-6 content-section__subtitle ui heading size-headingmd">
                                                {{ $blog->category->getTranslation('name', app()->getLocale()) }}:
                                                {{ Str::limit($blog->getTranslation('title', app()->getLocale()), 45) }}
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
                        </div>
                    </div>
                </div>
            </div>
            @include('front.projects-section.projects')
        </div>
    </section>
@endsection
