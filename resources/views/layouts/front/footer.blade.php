    <!-- start footer -->
    <footer class="py-5 bg-dark-black">
        <div class="container">
            <img class="logo img-fluid mb-4" src="{{ asset('assets/front_assets/images/img_footer_logo.png') }}"
                alt="Dopiks">
            <div class="row">
                <div class="col-lg-5 mb-4 d-flex flex-column justify-content-between gap-4">
                    <p class="text-light-gray">Your final impact statement goes here. <br> Make it memorable!</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#"
                            class="btn border text-uppercase text-white hover-orange rounded-0 py-2 px-3">Creative
                            Designs</a>
                        <a href="#"
                            class="btn border text-uppercase text-white hover-orange rounded-0 py-2 px-3">Motion
                            Graphics</a>
                        <a href="#"
                            class="btn border text-uppercase text-white hover-orange rounded-0 py-2 px-3">UI / ux</a>
                        <a href="#"
                            class="btn border text-uppercase text-white hover-orange rounded-0 py-2 px-3">Video
                            Production</a>
                        <a href="#"
                            class="btn border text-uppercase text-white hover-orange rounded-0 py-2 px-3">Performance
                            Marketing</a>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <a href="{{ Utility::getsettings('contact_facebook') }}"
                            class="bg-gray hover-orange rounded-circle px-2 py-1">
                            <img class="img-fluid" src="{{ asset('assets/front_assets/images/facebook.svg') }}"
                                alt="facebook">
                        </a>
                        <a href="{{ Utility::getsettings('contact_linkedin') }}"
                            class="bg-gray hover-orange rounded-circle px-2 py-1">
                            <img class="img-fluid" src="{{ asset('assets/front_assets/images/linkedin.svg') }}"
                                alt="linkedin">
                        </a>
                        <a href="{{ Utility::getsettings('contact_twitter') }}"
                            class="bg-gray hover-orange rounded-circle px-2 py-1">
                            <img class="img-fluid" src="{{ asset('assets/front_assets/images/twitter.svg') }}"
                                alt="twitter">
                        </a>
                    </div>
                </div>
                <ul class="col-6 col-lg-2 mb-4 text-capitalize d-flex flex-column gap-3">
                    <h4>Quic Link</h4>
                    <li><a href="{{ route('homepage') }}">Home</a></li>
                    <li><a href="{{ route('about-us') }}">About</a></li>
                    <li><a href="{{ route('faqs') }}">FAQ</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
                <ul class="col-6 col-lg-2 mb-4 text-capitalize d-flex flex-column gap-3">
                    <h4>Social media</h4>
                    <li><a href="{{ Utility::getsettings('contact_facebook') }}">Facebook</a></li>
                    <li><a href="{{ Utility::getsettings('contact_instagram') }}">instagram</a></li>
                    <li><a href="{{ Utility::getsettings('contact_twitter') }}">twitter</a></li>
                    <li><a href="{{ Utility::getsettings('contact_snapchat') }}">Snapchat</a></li>
                    <li><a href="{{ Utility::getsettings('contact_linkedin') }}">Linkedin</a></li>
                </ul>
                <div class="col-lg-3 mb-4 text-capitalize  d-flex flex-column gap-4">
                    <div>
                        <h5 class="text-light-gray">call us</h5>
                        <ul>
                            <li><a class="fs-4 fw-medium number"
                                    href="#">{{ Utility::getsettings('contact_phone1') }}</a></li>
                            <li><a class="fs-4 fw-medium number"
                                    href="#">{{ Utility::getsettings('contact_phone2') }}</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-light-gray">Corporate Office</h5>
                        <ul>
                            <li class="number">{{ Utility::getsettings('contact_address') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
