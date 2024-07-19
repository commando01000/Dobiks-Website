@extends('layouts.front.app')

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
    <section id="section-contact-us" class="section p-1">
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
            </div>
            @include('front.contact.contact-us-form')
        </main>
    </section>
@endsection
<!-- Contact-Us Section End -->
