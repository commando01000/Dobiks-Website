    <div class="row_seven">
        <div class="team-section">
            <div class="team-section__header">
                <div class="team-section__header-content">
                    <div class="team-section__title-row">
                        <p class="section__title ui text size-btn_text">Our Team</p>
                        <div class="team-section__divider"></div>
                    </div>
                    <div class="section__header">
                        <h2 class="team-section__subtitle ui heading size-headings">
                            Meet Our
                        </h2>
                        <h3 class="section__highlight ui heading size-headinglg">
                            Leadership
                        </h3>
                    </div>
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
                    <div class="user-profile" onclick="location.href='{{ route('team-details', $leadership->id) }}';">
                        <img src="{{ Storage::url($leadership->photo) }}" alt="profile image"
                            class="user-profile__image @if ($loop->index % 2 != 0) pt-4 @endif">
                        <p class="user-profile__name ui text size-textxl">
                            {{ $leadership->name }}
                        </p>
                        <p class="user-profile__role ui text size-texts">
                            {{ $leadership->position }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
