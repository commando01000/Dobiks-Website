

<?php $__env->startSection('content'); ?>

    <section id="team-details" class="w-100 mt-0 p-1 overflow-hidden">
        <main class="container-fluid ps-0 pe-0">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Team Details
                </h1>
                <small class="content-section__description fs-6">Home / TEAM DETAILS</small>
            </div>

            <div style="background-color: #191919" class="team-details-content m-5 p-5 ms-0 ps-0 me-0 pe-0">
                <div class="container-fluid ps-0 pe-0">
                    <div class="row w-75 m-auto justify-content-between gx-5">
                        <div class="col-md-4">
                            <img style="min-width: 314px; min-height: 414px" class="user-profile__image"
                                src="<?php echo e(asset('assets/front_assets/images/so3ody.jpeg')); ?>" alt="image">
                        </div>
                        <div class="col-md-6">
                            <div class="user-profile__details">
                                <h1 class="user-profile__title">Ahmed Bakry</h1>
                                <p class="user-profile__role">UI/UX Designer</p>
                                <br>
                                <p class="user-profile__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.
                                </p>
                                <br>
                                <p class="user-profile__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.
                                </p>
                                <div class="progress-bars-section overflow-visible pt-2">
                                    <p class="content-section__description ui text size-textmd">CREATIVE DESIGNS</p>
                                    <div style="height: 5px;" class="progress overflow-visible mb-2" role="progressbar"
                                        aria-label="Success example" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar" style="width: 100%">
                                            <span style="top: -15px" class="mb-2 position-absolute">100%</span>
                                        </div>
                                    </div>
                                    <p class="content-section__description ui text size-textmd">MOTION GRAPHICS</p>

                                    <div style="height: 5px;" class="progress overflow-visible mb-2" role="progressbar"
                                        aria-label="Info example" aria-valuenow="97" aria-valuemin="0" aria-valuemax="97">
                                        <div class="progress-bar" style="width: 97%">
                                            <span style="top: -15px" class="mb-2 position-absolute">97%</span>
                                        </div>
                                    </div>
                                    <p class="content-section__description ui text size-textmd">VIDEO PRODUCTION</p>
                                    <div style="height: 5px;" class="progress overflow-visible mb-2" role="progressbar"
                                        aria-label="Warning example" aria-valuenow="98" aria-valuemin="0"
                                        aria-valuemax="98">
                                        <div class="progress-bar" style="width: 98%">
                                            <span style="top: -15px" class="mb-2 position-absolute">98%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/front/team-details/index.blade.php ENDPATH**/ ?>