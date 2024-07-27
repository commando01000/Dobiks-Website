@extends('layouts.front.app')

@section('title', 'Our clients')

@section('content')
<section id="our-clients" class="w-100 mt-0 p-1">
    <main class="container-fluid">
        <div class="section__header pt-3 pb-1 justify-content-center align-items-center">
            <h1 class="content-section__title ui heading size-heading_1">
                Our clients
            </h1>
            <small class="content-section__description fs-6">HOME / OURCLIENTS</small>
        </div>
    </main>
</section>
@include('front.clients-section.clients')
@endsection
