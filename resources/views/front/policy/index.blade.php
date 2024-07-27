@extends('layouts.front.app')

@section('title', 'Privacy & Policy')


@section('content')
    <section id="privacy-policy" class="w-100 mt-0 p-1">
        <main class="container ps-0 pe-0">
            <div class="section__header pt-3 pb-1 justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Privacy & Policy
                </h1>
                <small class="content-section__description fs-6">HOME / PRIVACY & POLICY</small>
            </div>
            <div style="background-color: #191919;max-width: 100% !important" id="privacy-policy-content"
                class="privacy-policy w-100 mt-5 pt-5 pb-5 p-1 overflow-hidden text-white" >

                <?php
                $var = html_entity_decode(Utility::getsettings('privacy_description'));

                echo $var;

                ?>

            </div>
        </main>
    </section>
@endsection
