@extends('layouts.front.app')
@section('title', 'Our Team')

@section('content')
    <section class="meet-our-leadership p-5 m-5">
        <div class="container">
            <div class="section__header">
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
            <div class="row mt-5">
                @foreach ($leaderships as $leadership)
                    <div class="col-md-3">
                        <a href="{{ route('team-details', $leadership->id) }}" class="user-profile"
                            style="cursor: pointer;">
                            <img src="{{ Storage::url($leadership->photo) }}" alt="{{ $leadership->name }}"
                                class="user-profile__image @if ($loop->index % 2 != 0) pt-4 @endif">
                            <p class="user-profile__name ui text size-textxl">
                                {{ $leadership->name }}
                            </p>
                            <p class="user-profile__role ui text size-texts">
                                {{ $leadership->position }}
                            </p>
                        </a>
                    </div>
                @endforeach
                <div class="paginator mt-3">
                    {{ $leaderships->links('front.pagination.custom-pagination') }}
                </div>
            </div>
        </div>
    </section>
@endSection
