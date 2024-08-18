@extends('layouts.front.app')
@section('title', 'Faq')

@section('content')
    {{-- <section id="faq" class="p-1 min-vh-100">
        <div class="container-fluid p-0 m-0 overflow-hidden">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Faq
                </h1>
                <small class="content-section__description fs-6">HOME / FAQ</small>
            </div>
            <div class="faq-accordion w-100 pb-5 min-vh-100" style="background: #191919; !important;">
                <div class="row w-50 m-auto mt-5 pt-5">
                    <div class="col-md-12 col-lg-12  mb-5 mb-md-0">
                        <div class="accordion mt-5 custom-accordion-style-1 appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" id="accordion1"
                            style="animation-delay: 250ms;">
                            @foreach ($faqs as $key => $item)
                                <div class="accordion-item" style="background: #1C1C1C;">
                                    <h1 class="accordion-header w-100" id="heading{{ $key }}">
                                        <button style="width: 100% !important"
                                            class="accordion-button{{ $loop->first ? '' : ' collapsed' }} text-white"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $key }}"
                                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ $key }}">
                                            {{ $loop->iteration }} . {{ $item['questions'] }}
                                        </button>

                                    </h1>
                                    <div id="collapse{{ $key }}"
                                        class="accordion-collapse collapse{{ $loop->first ? ' show' : '' }}"
                                        aria-labelledby="heading{{ $key }}"
                                        data-bs-parent="#accordionPanelsStayOpenExample">
                                        <div class="accordion-body content-section__description fs-6">
                                            {{ $item['answer'] }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- start title -->
    <section>
        <div class="container">
            <div class="main-title">
                <h1>FAQ</h1>
                <div>
                    <a href="">Home</a>
                    <span class="slash">/</span>
                    <a href="">faq</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end title -->

    <!-- start faq -->
    <section>
        <div class="container">

            <div class="accordion mx-md-5 d-flex flex-column gap-3" id="accordionFlushFAQs">

                @foreach ($faqs as $key => $item)
                    <div class="accordion-item border-0 z-1">
                        <p class="accordion-header">
                            <button class="accordion-button collapsed fw-medium fs-5 bg-dark-black text-white"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $key }}"
                                aria-expanded="false" aria-controls="flush-collapse{{ $key }}">
                                {{ $loop->iteration }} . {{ $item['questions'] }}
                            </button>
                        </p>
                        <div id="flush-collapse{{ $key }}" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body py-4 px-5 bg-transparent text-light-gray">{{ $item['answer'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- end faq -->
@endsection
