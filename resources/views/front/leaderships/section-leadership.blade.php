    {{-- <div class="row_seven">
        <div class="team-section w-100">
            <div class="team-section__header">
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
                <div>
                    <div class="team-section__action-row">
                        <div class="section__feature-bg"></div>
                        <div class="team-section__action-content">
                            <p class="section__call-to-action-text ui text size-btn_text">
                                <a class="text-white" href="{{ route('about-us') }}"> view all Leadership<a>
                            </p>
                            <img src="{{ asset('assets/front_assets/images/img_arrow.svg') }}" alt="arrow image"
                                class="section__call-to-action-icon" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-section__members">
                @foreach ($leaderships as $leadership)
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
                @endforeach
                <div class="team-section__action-row d-none">
                    <div class="section__feature-bg"></div>
                    <div class="team-section__action-content">
                        <p class="section__call-to-action-text ui text size-btn_text">
                            <a class="text-white" href="{{ route('about-us') }}"> view all Leadership<a>
                        </p>
                        <img src="{{ asset('assets/front_assets/images/img_arrow.svg') }}" alt="arrow image"
                            class="section__call-to-action-icon" />
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- start team section -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="big-head">
                        <span>our team</span>
                        <p>meet our</p>
                        <h2>leadership</h2>
                    </div>
                    <a href="{{ route('about-us') }}" class="btn main-btn mx-0">
                        <span>view all leadership</span>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="row align-items-center">
                        @foreach ($leaderships as $leadership)
                            <a href="{{ route('team-details', $leadership->id) }}" class="col-4">
                                <img class="img-fluid w-100 @if ($loop->index % 2 != 0) pt-4 @endif"
                                    src="{{ Storage::url($leadership->photo) }}" alt="leadership">
                                <div class="text-center mt-3">
                                    <p class="fs-5">{{ $leadership->name }}</p>
                                    <span class="text-small text-light-gray">{{ $leadership->position }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end team section -->
