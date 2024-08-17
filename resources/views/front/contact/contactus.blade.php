@extends('layouts.front.app')
@section('title', 'Contact us')
<style>
    .message-container {
        position: fixed;
        /* Use fixed positioning */
        top: 80px;
        /* Distance from the top */
        right: 20px;
        /* Distance from the right */
        z-index: 1000;
        /* Ensure it sits above other content */
    }
</style>
<script>
    setTimeout(function() {
        document.getElementsByClassName("message-container")[0].style.display = "none";
    }, 2000);
</script>
<!-- Contact-Us Section -->
@section('content')
    @if (session()->has('message'))
        <div class="message-container">
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        </div>
    @endif
    {{-- <section id="section-contact-us" class="section p-1">
        <main class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Contact Us
                </h1>
                <small class="content-section__description fs-6">Home / Contact Us</small>
            </div>
            <div class="contact-us-section__title align-items-start ui heading size-heading_1 mt-5 pt-5 mb-5">
                <p>we build immersive</p>
                <p>digital experiences.</p>
                <div class="content-section__divider mt-5"></div>
                <div class="contact-us-section__content ps-0 p-5">
                    <h2 class="content-section__subtitle ui heading size-headingmd">
                        Let Us Tell Your Story
                    </h2>
                    <p class="content-section__description ui text size-textmd">
                        The Creative agency for international and local brands
                    </p>
                </div>
            </div>
            @include('front.contact.contact-us-form')

            <div class="w-100 text-center map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96766.88268468229!2d-74.03990389460608!3d40.71878513231992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250d225bfafdd%3A0x249f013a2cd25d9!2sJersey%20City%2C%20NJ%2C%20USA!5e0!3m2!1sen!2seg!4v1721906467765!5m2!1sen!2seg"
                    width="1000" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </main>
    </section> --}}
    <!-- start title -->
    <section>
        <div class="container">
            <div class="main-title">
                <h1>Team Details</h1>
                <div>
                    <a href="">Home</a>
                    <span class="slash">/</span>
                    <a href="">Team Details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end title -->

    <!-- start contact description -->
    <section>
        <div class="container">
            <h2 class="col-lg-7 text-bigger mb-5">
                We build immersive digital experiences.
            </h2>
            <div class="col-lg-4 contact-line position-relative pt-4">
                <h3 class="fs-2">Let Us Tell Your Story</h3>
                <p class="text-light-gray">
                    The Creative agency for international and local brands
                </p>
            </div>
        </div>
    </section>
    <!-- end contact description -->

    <!-- start form -->
    <section>
        <div class="container">
            <div class="row gap-4 gap-md-0">
                <div class="col-md-8">
                    <div class="big-head">
                        <span>waiting</span>
                        <p>Let's Go</p>
                        <h2>Register Form</h2>
                    </div>
                    @include('front.contact.contact-us-form')
                </div>
                <div class="col-md-4 text-capitalize d-flex flex-column gap-4">
                    <img class="form-logo img-fluid" src="assets/logo.png" alt="" />
                    <h3>Let Us Tell Your Story</h3>
                    <div>
                        <h5 class="text-light-gray">call us</h5>
                        <ul>
                            <li>
                                <a class="fs-4 fw-medium number" href="#">(+20) 262-2578</a>
                            </li>
                            <li>
                                <a class="fs-4 fw-medium number" href="#">(+20) 262-2578</a>
                            </li>
                        </ul>
                    </div>
                    <a href=""
                        class="btn hover-orange d-flex align-items-center justify-content-center gap-2 py-2 border w-100 text-white">
                        <img class="img-fluid" src="assets/whatsapp.png" alt="" />
                        <span>Contact US</span>
                    </a>
                    <div>
                        <h5 class="text-light-gray">Head Office</h5>
                        <ul>
                            <li class="number fs-5">
                                61973 State 415 Rte, Cohocton, New York 14826, USA
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end form -->

    <!-- start offices -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="py-5 px-4 bg-dark-black">
                        <span class="text-light-gray">Head Office</span>
                        <p class="number fs-4 mt-2">
                            {{ Utility::getsettings('contact_address2') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="py-5 px-4 bg-dark-black">
                        <span class="text-light-gray">Head Office</span>
                        <p class="number fs-4 mt-2">
                            {{ Utility::getsettings('contact_addrees3') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="py-5 px-4 bg-dark-black">
                        <span class="text-light-gray">Head Office</span>
                        <p class="number fs-4 mt-2">
                            {{ Utility::getsettings('contact_addrees4') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end offices -->


@endsection
<!-- Contact-Us Section End -->
