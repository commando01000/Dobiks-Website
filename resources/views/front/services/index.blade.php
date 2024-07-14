@extends('layouts.front.app')

@section('title', 'Services')
@section('content')
    <section id="services" class="w-100 mt-0 p-1">
        <main class="container-fluid">
            <div class="section__header pt-3 pb-1 justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Services
                </h1>
                <small class="content-section__description fs-6">HOME / SERVICES</small>
            </div>
            @include('front.projects-section.projects')
        </main>
    </section>
    @include('front.clients-section.clients')
@endsection
