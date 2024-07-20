

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
                <div class="contact-us-section__content p-5">
                    <h2 class="content-section__subtitle ui heading size-headingmd">
                        Let Us Tell Your Story
                    </h2>
                    <p class="content-section__description ui text size-textmd">
                        The Creative agency for international and local brands
                    </p>
                </div>
            </div>
            <?php echo $__env->make('front.contact.contact-us-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </main>
    </section>
<?php $__env->stopSection(); ?>
<!-- Contact-Us Section End -->

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/contact/contactus.blade.php ENDPATH**/ ?>