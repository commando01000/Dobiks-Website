<section class="meet-our-leadership p-5 m-5">
    <div class="container">
        <div class="section__header">
            <div class="section__header-row">
                <p class="section__title ui text size-btn_text">Our Team</p>
                <div class="section__divider"></div>
            </div>
            <h2 class="section__subtitle ui heading size-headings">
                Meet Our
            </h2>
            <h3 class="section__highlight ui heading size-headinglg">
                Leadership
            </h3>
        </div>
        <div class="row mt-5">
            @foreach ($leaderships as $leadership)
                <div class="col-md-3">
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
                </div>
            @endforeach
        </div>
    </div>
</section>
