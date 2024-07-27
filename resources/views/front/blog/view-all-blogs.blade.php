@extends('layouts.front.app')
@section('title', 'Blog' )

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    <section id="blog" class="w-100 mt-0 p-1 overflow-hidden">
        <div class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Blog
                </h1>
                <small class="content-section__description fs-6">HOME / BLOG</small>
            </div>
            <div style="background-color: #191919" class="blog-content m-5 p-5 ms-0 ps-0 me-0 pe-0">
                <div class="container">
                    <div class="row gy-4">
                        @if (isset($allBlogs))
                            @foreach ($allBlogs as $blog)
                                <div class="col-md-4">
                                    <div style="min-height: 350px; max-height: 350px" class="card p-5">
                                        <div class="card-body">
                                            <p class="w-75 fs-6 content-section__subtitle ui heading size-headingmd">
                                                {{ Str::limit($blog->getTranslation('title', app()->getLocale()), 45) }}
                                                {{ Str::limit($blog->getTranslation('short_description', app()->getLocale()), 45) }}
                                                {{-- {{ Str::limit($blog->normal_description, 60, '...') }} --}}
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
                <div class="paginator mt-3">
                    {{ $allBlogs->links('front.pagination.custom-pagination') }}
                </div>
            </div>
        </div>
        {{-- add pagination --}}
        {{-- $blogs->links() --}}
    </section>
@endsection
