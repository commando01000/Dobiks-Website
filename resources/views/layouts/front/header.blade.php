    <!-- strat header -->
    <header class="py-3 position-sticky top-0 start-0 z-3">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img class="logo"
                        src="{{ asset('assets/front_assets/images/img_header_logo.png') }}" alt="Dopiks"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <img class="img-fluid" src="{{ asset('assets/front_assets/images/hamburger-icon.png') }}"
                        alt="menu">
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto gap-3 text-center text-lg-start">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Dopiks</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($services_header as $service)
                                    <li><a class="dropdown-item"
                                            href="{{ route('view.service', $service->slug) }}">{{ $service->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Our clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- start toggle menu -->
            <div class="d-none d-lg-block">
                <div id="toggle-menu" class='toggle-wrap'>
                    <span class='toggle-bar'></span>
                </div>
                <div class="header-form py-4 px-5">
                    <div class="container">
                        <div class="text-center">
                            <img class="img-fluid form-logo"
                                src="{{ asset('assets/front_assets/images/img_header_logo.png') }}" alt="logo">
                        </div>
                        <p class="text-center my-3 text-light-gray">
                            At Dopiks, we see a world where every brand has the power to connect with its audience in a
                            meaningful way. We want to help businesses tell their stories and reach their full potential
                            through innovative digital marketing strategies. Our vision is to be the go-to agency for
                            brands looking to create impactful campaigns and build lasting relationships with their
                            customers.
                        </p>
                        <form class="form d-flex flex-column gap-3" action="">
                            <div class="row">
                                <div class="col-6">
                                    <label class="text-capitalize" for="first-name">First Name <span
                                            class="text-orange">*</span></label>
                                    <input class="bg-transparent border-0 border-bottom mt-2 w-100 p-1" type="text"
                                        placeholder="First name here" name="first-name" id="first-name">
                                </div>
                                <div class="col-6">
                                    <label class="text-capitalize" for="last-name">Last Name <span
                                            class="text-orange">*</span></label>
                                    <input class="bg-transparent border-0 border-bottom mt-2 w-100 p-1" type="text"
                                        placeholder="Last name here" name="last-name" id="last-name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label class="text-capitalize" for="email">Email Address <span
                                            class="text-orange">*</span></label>
                                    <input class="bg-transparent border-0 border-bottom mt-2 w-100 p-1" type="email"
                                        placeholder="Add email" name="email" id="email">
                                </div>
                                <div class="col-6">
                                    <label class="text-capitalize" for="subject">Subject <span
                                            class="text-orange">*</span></label>
                                    <input class="bg-transparent border-0 border-bottom mt-2 w-100 p-1" type="text"
                                        placeholder="How can we help you?" name="subject" id="subject">
                                </div>
                            </div>
                            <div>
                                <label class="text-capitalize" for="comments">Comments / Questions <span
                                        class="text-orange">*</span></label>
                                <textarea class="bg-transparent border-0 border-bottom mt-2 w-100 p-1" type="text" name="comments" id="comments"
                                    cols="30" rows="3"></textarea>
                            </div>
                        </form>
                        <button class="btn main-btn mx-0 mt-4">Send Message</button>
                        <div class="d-flex align-items-center justify-content-center gap-3">
                            <a href="#" class="bg-gray hover-orange rounded-circle px-2 py-1">
                                <img class="img-fluid" src="{{ asset('assets/front_assets/images/facebook.svg') }}"
                                    alt="facebook">
                            </a>
                            <a href="#" class="bg-gray hover-orange rounded-circle px-2 py-1">
                                <img class="img-fluid" src="{{ asset('assets/front_assets/images/linkedin.svg') }}"
                                    alt="linkedin">
                            </a>
                            <a href="#" class="bg-gray hover-orange rounded-circle px-2 py-1">
                                <img class="img-fluid" src="{{ asset('assets/front_assets/images/twitter.svg') }}"
                                    alt="twitter">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end toggle menu -->
        </nav>
    </header>
    <!-- end header -->
