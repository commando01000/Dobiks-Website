

<style>
    .message-container {
        position: fixed;
        /* Use fixed positioning */
        top: 80px;
        /* Distance from the top */
        right: 20px;
        /* Distance from the right */
        z-index: 1000;
        /* Ensure it sits above other content */
    }
</style>
<script>
    setTimeout(function() {
        document.getElementsByClassName("message-container")[0].style.display = "none";
    }, 2000);
</script>
<!-- Contact-Us Section -->
<?php $__env->startSection('content'); ?>
    <?php if(session()->has('message')): ?>
        <div class="message-container">
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
        </div>
    <?php endif; ?>
    <section id="section-contact-us" class="section p-1">
        <main class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Contact Us
                </h1>
                <small class="content-section__description fs-6">Home / Contact Us</small>
            </div>
            <div class="contact-us-section__title align-items-start ui heading size-heading_1 mt-5 pt-5 mb-5">
                <p>we build immersive</p>
                <p>digital experiences.</p>
                <div class="content-section__divider mt-5"></div>
            </div>
            <div class="contact-us-section__content p-5">
                <h2 class="content-section__subtitle ui heading size-headingmd">
                    Let Us Tell Your Story
                </h2>
                <p class="content-section__description ui text size-textmd">
                    The Creative agency for international and local brands
                </p>
            </div>
            <div class="row gx-2">
                <div class="col-md-6">
                    <!-- <label class="form-group">
                                                                                                    <input type="text" class="form-control" required="" />
                                                                                                    <span>Full name here</span>
                                                                                                    <span class="border"></span>
                                                                                                  </label> -->
                    <div class="inline-container d-flex align-items-center flex-row">
                        <!-- Added container for inline elements -->
                        <span class="d-inline-block content-section__description ui text size-textmd">WAITING</span>
                        <div class="ms-3 content-section__divider"></div>
                    </div>
                    <div class="form-content pt-1">
                        <h2 class="content-section__subtitle ui heading size-headingmd">
                            Let's Go
                        </h2>
                        <h1 class="content-section__title">Contact Us</h1>
                        <div class="row flex-wrap gy-2">
                            <form method="post" action="<?php echo e(route('contact_us.store')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="col-md-12">
                                    <div class="mb-5">
                                        <label for="name" class="col-form-label text-white">First Name <span
                                                style="color: #ff5101"> *</span></label>
                                        <input type="text" class="form-control text-white" name="firstname"
                                            id="name" placeholder="First Name" required />
                                    </div>
                                    <div class="mb-5">
                                        <label for="c_name" class="col-form-label text-white">Last Name
                                            <span style="color: #ff5101"> *</span></label>
                                        <input type="text" class="form-control text-white" name="lastname" id="c_name"
                                            placeholder="Last Name" required />
                                    </div>
                                    <div class="mb-5">
                                        <label for="ph_number" class="col-form-label text-white">
                                            Email
                                            <span style="color: #ff5101"> *</span></label>
                                        <input type="email" class="form-control text-white" name="email" id="ph_number"
                                            placeholder="Email" required />
                                    </div>
                                    <div class="mb-5">
                                        <label for="ph_number" class="col-form-label text-white">
                                            Subject
                                            <span style="color: #ff5101"> *</span></label>
                                        <input type="text" class="form-control text-white" name="subject" id="ph_number"
                                            placeholder="subject" required />
                                    </div>
                                    <div class="mb-5">
                                        <label for="ph_number" class="col-form-label text-white">
                                            Comments
                                            <span style="color: #ff5101"> *</span></label>
                                        <textarea class="form-control text-white" name="comments" id="ph_number" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="mb-5">
                                        <div class="row gx-1 justify-content-around gy-1">
                                            <div class="col-md-12">
                                                <label for="c_name" class="col-form-label text-white">
                                                    Select Service
                                                    <span style="color: #ff5101"> *</span></label>
                                                <br />
                                                <a name="FACEBOOK" id="FACEBOOK" class="btn ps-5 pe-5 border-0"
                                                    style="color: white; background-color: #ff5101"
                                                    href="<?php echo e(Utility::getsettings('contact_facebook')); ?>"
                                                    role="button">FACEBOOK</a>
                                                <a name="TWITTER" id="TWITTER" class="btn ps-5 pe-5 border-0"
                                                    style="color: white; background-color: #ff5101"
                                                    href="<?php echo e(Utility::getsettings('contact_twitter')); ?>"
                                                    role="button">TWITTER</a>
                                                <a name="LINKEDIN" id="LINKEDIN" class="btn ps-5 pe-5 border-0"
                                                    style="color: white; background-color: #ff5101"
                                                    href="<?php echo e(Utility::getsettings('contact_linkedin')); ?>"
                                                    role="button">LINKEDIN</a>
                                                <a name="INSTAGRAM" id="INSTAGRAM" class="btn ps-5 pe-5 mt-1 border-0"
                                                    style="color: white; background-color: #ff5101"
                                                    href="<?php echo e(Utility::getsettings('contact_instagram')); ?>"
                                                    role="button">INSTAGRAM</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="logo d-flex align-items-center flex-column">
                        <div>
                            <img src="<?php echo e(asset('assets/front_assets/images/img_header_logo.png')); ?>"
                                style="width: 289px; height: 113px" class="" alt="" />
                        </div>
                        <div class="contact-us-content">
                            <h5 class="content-section__subtitle ui heading size-headingmd fs-3 mt-3">
                                Let Us Tell Your Story
                            </h5>
                            <span class="content-section__description ui text size-textmd">
                                Call US
                            </span>
                            <h4 class="content-section__title fs-1"><?php echo e(Utility::getsettings('contact_phone1')); ?></h4>
                            <h4 class="content-section__title fs-1"><?php echo e(Utility::getsettings('contact_phone2')); ?></h4>
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
                                    <p class="card-text"><?php echo e(Utility::getsettings('contact_address')); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="submit-button position-relative">
                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="text z-1">
                        SUBMIT REQUEST
                        <span class="arrow">→</span>
                    </div>
                </button>
            </div>
            </form>

            <div class="row gx-0">
                <div class="col-md-4">
                    <div class="our-resident p-5">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text text-white">Head Office</p>
                                <p class="card-text">
                                    <?php echo e(Utility::getsettings('contact_address')); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-resident p-5">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text text-white">Head Office</p>
                                <p class="card-text">
                                    <?php echo e(Utility::getsettings('contact_address')); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-resident p-5">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text text-white">Head Office</p>
                                <p class="card-text">
                                    <?php echo e(Utility::getsettings('contact_address')); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
<?php $__env->stopSection(); ?>
<!-- Contact-Us Section End -->

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/contact/contactus.blade.php ENDPATH**/ ?>