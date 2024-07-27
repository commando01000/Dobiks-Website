<div class="stack_one overflow-hidden">
    <footer class="footer">
        <div class="footer__stack">
            <div class="footer__stack__row">
                <div class="footer__stack__row__eight">
                    <div class="footer__stack__row__eight__row">
                        <div class="footer__stack__row__eight__row__column">
                            <img src="{{ asset('assets/front_assets/images/img_footer_logo.png') }}" alt="footer logo"
                                class="footer__logo" />
                            <p class="footer__impact-statement ui text size-texts">
                                Your final impact statement goes here.<br />Make it
                                memorable!
                            </p>
                            <form chip-view="" id="1:112" class="footer__social-chips">
                                <label tabindex="0" class="flex-row-center-center footer__social-chip--creative">
                                    <input type="checkbox" name="selectedChipOptions" value="1" hidden="true" />
                                    <span> Creative Designs</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>
                                <label tabindex="0" class="flex-row-center-center footer__social-chip--motion">
                                    <input type="checkbox" name="selectedChipOptions" value="2" hidden="true" />
                                    <span> Motion Graphics</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>
                                <label tabindex="0" class="flex-row-center-center footer__social-chip--uiux">
                                    <input type="checkbox" name="selectedChipOptions" value="3" hidden="true" />
                                    <span> UI / UX</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>
                                <label tabindex="0" class="flex-row-center-center footer__social-chip--video">
                                    <input type="checkbox" name="selectedChipOptions" value="4" hidden="true" />
                                    <span> Video Production</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>
                                <label tabindex="0" class="flex-row-center-center footer__social-chip--marketing">
                                    <input type="checkbox" name="selectedChipOptions" value="5" hidden="true" />
                                    <span> Performance Marketing</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>
                            </form>
                            <div class="footer__stack__row__eight__row__link-row">
                                {{-- <span style="line-height: 30px" class="content-section__description fs-6">Social Share :</span> --}}
                                <a href="{{ Utility::getsettings('contact_facebook') }}"
                                    class="footer__social-button--facebook">
                                    <img src="{{ asset('assets/front_assets/images/img_facebook_app_symbol.svg') }}">
                                </a>
                                <a href="{{ Utility::getsettings('contact_instagram') }}"
                                    class="footer__link-button--link">
                                    <img src="{{ asset('assets/front_assets/images/img_link.svg') }}">
                                </a>
                                <a href="{{ Utility::getsettings('contact_twitter') }}"
                                    class="footer__link-button--link">
                                    <img src="{{ asset('assets/front_assets/images/img_trash.svg') }}">
                                </a>
                            </div>
                        </div>
                        <div class="footer__stack__row__eight__column">
                            <div class="footer__stack__row__eight__column__row">
                                <div class="footer__stack__row__eight__column__row__quick-links">
                                    <div class="col-md-6 footer__stack__row__eight__column__row__quick-links__column">
                                        <p class="footer__quick-link-title ui text size-textxl">
                                            Quic Link
                                        </p>
                                        <ul class="footer__stack__row__eight__column__row__quick-links__column__list">
                                            <li>
                                                <a href="{{ route('homepage') }}">
                                                    <p class="footer__quick-link--home ui text size-texts">
                                                        Home
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('about-us') }}">
                                                    <p class="footer__quick-link--about ui text size-texts">
                                                        About
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('services') }}">
                                                    <p class="footer__quick-link--about ui text size-texts">
                                                        Service
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('faqs') }}">
                                                    <p class="footer__quick-link--about ui text size-texts">
                                                        FAQ
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact') }}">
                                                    <p class="footer__quick-link--about ui text size-texts">
                                                        Contact Us
                                                    </p>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('PrivacyPolicy') }}">
                                                    <p class="footer__quick-link--about ui text size-texts">
                                                        Privacy & Policys
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 footer__stack__row__eight__column__row__social-media">
                                        <p class="footer__quick-link-title ui text size-textxl">
                                            Social media
                                        </p>
                                        <ul class="footer__stack__row__eight__column__row__social-media__column">
                                            <li>
                                                <a href="{{ Utility::getsettings('contact_facebook') }}">
                                                    <p class="footer__quick-link--about ui text size-texts">
                                                        Facebook
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ Utility::getsettings('contact_instagram') }}">
                                                    <p class="footer__quick-link--about ui text size-texts">
                                                        instagram
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ Utility::getsettings('contact_twitter') }}">
                                                    <p class="footer__quick-link--about ui text size-texts">
                                                        twitter
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ Utility::getsettings('snapchat') }}">
                                                    <p class="footer__quick-link--about ui text size-texts">
                                                        Snapchat
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ Utility::getsettings('contact_linkedin') }}">
                                                    <p class="footer__quick-link--about ui text size-texts">
                                                        Linkedin
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer__stack__row__eight__column__row__contact">
                                    <div class="section__header">
                                        <p class="footer__contact-title ui text size-textmd">
                                            Call Us
                                        </p>
                                        <h3 class="footer__contact-number ui heading size-headingxs">
                                            {{ Utility::getsettings('contact_phone1') }}
                                        </h3>
                                        <h3 class="footer__contact-number--alternate ui heading size-headingxs">
                                            {{ Utility::getsettings('contact_phone2') }}
                                        </h3>
                                    </div>
                                    <div class="section__header">
                                        <p class="footer__contact-title ui text size-textmd">
                                            Corporate Office
                                        </p>
                                        <p class="footer__address-details ui text size-textlg text-center">
                                            {{ Utility::getsettings('contact_address') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <p class="footer__copyright ui text size-texts">
                                All copy rights are reserved to Dopiks
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#">
        <div class="clock">
            <div class="clock__column">
                <img src="{{ asset('assets/front_assets/images/img_polygon_1.svg') }}" alt="arrow image"
                    class="clock__icon--arrow-up" />
                <img src="{{ asset('assets/front_assets/images/img_border.svg') }}" alt="border image"
                    class="clock__border" />
            </div>
        </div>
    </a>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('assets/front_assets/assets/js/home.js') }}?v=<?= time() ?>"></script>
