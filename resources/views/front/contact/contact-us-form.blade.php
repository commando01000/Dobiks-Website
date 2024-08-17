{{-- <div class="row gx-2">
    <div class="col-md-6">
        <div class="inline-container d-flex align-items-center flex-row">
            <!-- Added container for inline elements -->
            <span class="d-inline-block content-section__description ui text size-textmd">WAITING</span>
            <div class="ms-3 content-section__divider"></div>
        </div>
        <div class="form-content pt-1">
            <h2 class="content-section__subtitle ui heading size-headingmd">
                Let's Go
            </h2>
            <h1 class="content-section__title">Register Form</h1>
            <div class="row flex-wrap gy-2">
                <form method="post" action="{{ route('contact_us.store') }}">
                    @csrf
                    <div class="col-md-12">
                        <div class="mb-5">
                            <label for="name" class="col-form-label text-white">First Name <span
                                    style="color: #ff5101"> *</span></label>
                            <input type="text" class="form-control content-section__description" name="firstname"
                                id="name" placeholder="First Name" required />
                        </div>
                        <div class="mb-5">
                            <label for="c_name" class="col-form-label text-white">Last Name
                                <span style="color: #ff5101"> *</span></label>
                            <input type="text" class="form-control content-section__description" name="lastname"
                                id="c_name" placeholder="Last Name" required />
                        </div>
                        <div class="mb-5">
                            <label for="ph_number" class="col-form-label text-white">
                                Email
                                <span style="color: #ff5101"> *</span></label>
                            <input type="email" class="form-control content-section__description" name="email"
                                id="ph_number" placeholder="Email" required />
                        </div>
                        <div class="mb-5">
                            <label for="ph_number" class="col-form-label text-white">
                                Subject
                                <span style="color: #ff5101"> *</span></label>
                            <input type="text" class="form-control content-section__description" name="subject"
                                id="ph_number" placeholder="subject" required />
                        </div>
                        <div class="mb-5">
                            <label for="ph_number" class="col-form-label text-white">
                                Comments
                                <span style="color: #ff5101"> *</span></label>
                            <textarea class="form-control content-section__description" name="comments" id="ph_number" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="mb-5">
                            <label for="c_name" class="col-form-label text-white">
                                Select Service
                                <span style="color: #ff5101"> *</span>
                            </label>
                            <br />
                            <div class="row gx-2 gy-2">
                                <div class="col-6 col-md-3">
                                    <a name="FACEBOOK" id="FACEBOOK" class="btn w-100 border-0"
                                        style="color: white; background-color: #ff5101"
                                        href="{{ Utility::getsettings('contact_facebook') }}"
                                        role="button">FACEBOOK</a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a name="TWITTER" id="TWITTER" class="btn w-100 border-0"
                                        style="color: white; background-color: #ff5101"
                                        href="{{ Utility::getsettings('contact_twitter') }}" role="button">TWITTER</a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a name="LINKEDIN" id="LINKEDIN" class="btn w-100 border-0"
                                        style="color: white; background-color: #ff5101"
                                        href="{{ Utility::getsettings('contact_linkedin') }}"
                                        role="button">LINKEDIN</a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a name="INSTAGRAM" id="INSTAGRAM" class="btn w-100 border-0"
                                        style="color: white; background-color: #ff5101"
                                        href="{{ Utility::getsettings('contact_instagram') }}"
                                        role="button">INSTAGRAM</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="w-100 d-flex justify-content-center">
                            <button class="submit-button position-relative">
                                <div class="circle position-absolute start-0 z-0"></div>
                                <div class="text z-1">
                                    SUBMIT REQUEST
                                    <span class="arrow">→</span>
                                </div>
                            </button>
                        </div>
                        <br>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="logo d-flex align-items-center flex-column">
            <div>
                <img src="{{ asset('assets/front_assets/images/img_header_logo.png') }}"
                    style="width: 289px; height: 113px" class="" alt="" />
            </div>
            <div class="contact-us-content">
                <h5 class="content-section__subtitle ui heading size-headingmd fs-3 mt-3">
                    Let Us Tell Your Story
                </h5>
                <span class="content-section__description ui text size-textmd">
                    Call US
                </span>
                <h4 class="content-section__title fs-1">{{ Utility::getsettings('contact_phone1') }}</h4>
                <h4 class="content-section__title fs-1">{{ Utility::getsettings('contact_phone2') }}</h4>
            </div>
            <div class="contact-us-button">
                <a href="#" style="border-color: #ff5101"
                    class="btn btn-lg bg-transparent contact-us-button ps-5 pe-5 text-white">
                    <!-- what's app icon -->
                    <i class="fa-brands fa-whatsapp fs-5"></i> Contact Us
                </a>
            </div>
            <div class="our-resident p-5">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text text-white">Head Office</p>
                        <p class="card-text">{{ Utility::getsettings('contact_address') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<div class="row gx-0">
    <div class="col-md-4">
        <div class="our-resident p-5">
            <div style="min-height: 200px !important" class="card">
                <div class="card-body">
                    <p class="card-text text-white">Head Office</p>
                    <p class="card-text">
                        {{ Utility::getsettings('contact_address2') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="our-resident p-5">
            <div style="min-height: 200px !important" class="card">
                <div class="card-body">
                    <p class="card-text text-white">Head Office</p>
                    <p class="card-text">
                        {{ Utility::getsettings('contact_addrees3') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="our-resident p-5">
            <div style="min-height: 200px !important" class="card">
                <div class="card-body">
                    <p class="card-text text-white">Head Office</p>
                    <p class="card-text">
                        {{ Utility::getsettings('contact_addrees4') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<form class="form d-flex flex-column gap-5" method="post" action="{{ route('contact_us.store') }}">
    @csrf
    <div class="fs-4">
        <label class="text-capitalize" for="name">First Name <span class="text-orange">*</span></label>
        <input class="bg-transparent border-0 border-bottom mt-2 w-100 p-1" type="text" placeholder="First name here"
            name="firstname" id="name" />
    </div>
    <div class="fs-4">
        <label class="text-capitalize" for="c_name">Last Name <span class="text-orange">*</span></label>
        <input class="bg-transparent border-0 border-bottom mt-2 w-100 p-1" name="lastname" type="text"
            placeholder="Last Name here" id="c_name" />
    </div>
    <div class="fs-4">
        <label class="text-capitalize" for="Email">Email <span class="text-orange">*</span></label>
        <input class="bg-transparent border-0 border-bottom mt-2 w-100 p-1" type="email" placeholder="Email here"
            name="email" id="Email" />
    </div>
    <div class="fs-4">
        <label class="text-capitalize" for="Subject">Subject <span class="text-orange">*</span></label>
        <input class="bg-transparent border-0 border-bottom mt-2 w-100 p-1" type="text" placeholder="Subject here"
            name="subject" id="Subject" />
    </div>
    <div class="fs-4">
        <label class="text-capitalize" for="Comments">Comment <span class="text-orange">*</span></label>
        <textarea class="bg-transparent border-0 border-bottom mt-2 w-100 p-1" placeholder="Message" name="comments"
            id="Comments" cols="30" rows="3"></textarea>
    </div>
    {{-- <div class="fs-4">
        <label class="text-capitalize" for="select-service">Select Service <span class="text-orange">*</span></label>
        <div class="btn-group d-block mt-4 text-uppercase" id="select-service" role="group"
            aria-label="Basic checkbox toggle button group">
            <input type="checkbox" class="btn-check" id="facebook" autocomplete="off" />
            <label class="btn text-white border py-2 px-3 me-2 mb-3 rounded-0 hover-orange"
                for="facebook">Facebook</label>
            <input type="checkbox" class="btn-check" id="twitter" autocomplete="off" />
            <label class="btn text-white border py-2 px-3 me-2 mb-3 rounded-0 hover-orange"
                for="twitter">Twitter</label>
            <input type="checkbox" class="btn-check" id="linkedin" autocomplete="off" />
            <label class="btn text-white border py-2 px-3 me-2 mb-3 rounded-0 hover-orange"
                for="linkedin">LinkedIn</label>
            <input type="checkbox" class="btn-check" id="instagram" autocomplete="off" />
            <label class="btn text-white border py-2 px-3 me-2 mb-3 rounded-0 hover-orange"
                for="instagram">Instagram</label>
        </div>
    </div> --}}
    <button type="submit" class="btn mx-0 mt-3 main-btn">
        Submit Request
    </button>
</form>