<div id="section-clients" class="section">
    <div id="tabList" role="tablist" aria-label="Services Row" class="section__content">
        <div class="section__header">
            <div class="section__header-row">
                <p class="section__title ui text size-btn_text">Clients</p>
                <div class="section__divider"></div>
            </div>
            <h2 class="section__subtitle ui heading size-headings">
                Meet Our
            </h2>
            <h3 class="section__highlight ui heading size-headinglg">
                Special Client’s
            </h3>
        </div>
        <ul class="nav nav-pills section__tabs" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="position-relative nav-link active text-decoration-none section__tab-item active"
                    id="pills-creative-design-clients-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-creative-design-clients" type="button" role="tab"
                    aria-controls="pills-creative-design" aria-selected="true" tabindex="0" style="cursor: pointer">

                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="position-relative text z-1 text-white">
                        Creative Designs
                    </div>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="position-relative nav-link text-decoration-none section__tab-item"
                    id="pills-motion-graphics-clients-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-motion-graphics-clients" type="button" role="tab"
                    aria-controls="pills-motion-graphics-clients" aria-selected="false" tabindex="0"
                    style="cursor: pointer">
                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="position-relative text z-1 text-white">
                        Motion Graphics
                    </div>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="position-relative nav-link section__tab-item" id="pills-video-shooting-clients-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-video-shooting-clients" type="button" role="tab"
                    aria-controls="pills-video-shooting-clients" aria-selected="false">
                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="position-relative text z-1 text-white">
                        Video Shooting
                    </div>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="position-relative nav-link section__tab-item" id="pills-event-management-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-event-management" type="button" role="tab"
                    aria-controls="pills-event-management" aria-selected="false">
                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="position-relative text z-1 text-white">
                        Event Management
                    </div>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="position-relative nav-link section__tab-item" id="pills-interior-luxury-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-interior-luxury" type="button" role="tab"
                    aria-controls="pills-interior-luxury" aria-selected="false"> 
                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="position-relative text z-1 text-white">
                        Interior – Luxury Living
                    </div>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="position-relative nav-link section__tab-item" id="pills-ui-ux-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-ui-ux" type="button" role="tab" aria-controls="pills-ui-ux"
                    aria-selected="false">
                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="position-relative text z-1 text-white">
                        ui/ux design
                    </div>
                </button>
            </li>
        </ul>

        <div class="tab-content w-100" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-creative-design-clients" role="tabpanel"
                aria-labelledby="pills-creative-design-clients-tab" tabindex="0">
                <div class="container">
                    <div class="row gx-5 gy-5">
                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card border-1 p-5 d-flex justify-content-center align-items-center"
                                style="
            min-height: 300px;
            border: 1px solid var(--gray_800);
            background-color: #1a1a1a;
          ">
                                <div class="card-image w-100 h-100">
                                    <img src="<?php echo e(Storage::url($client->cover)); ?>" class="w-100" alt="item" />
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-motion-graphics-clients" role="tabpanel"
                aria-labelledby="pills-motion-graphics-clients-tab" tabindex="0">
                ...
            </div>
            <div class="tab-pane fade" id="pills-video-shooting-clients" role="tabpanel"
                aria-labelledby="pills-video-shooting-clients-tab" tabindex="0">
                ...
            </div>
            <div class="tab-pane fade" id="pills-event-management" role="tabpanel"
                aria-labelledby="pills-event-management-tab" tabindex="0">
                ...
            </div>
            <div class="tab-pane fade" id="pills-interior-luxury" role="tabpanel"
                aria-labelledby="pills-interior-luxury-tab" tabindex="0">
                ...
            </div>
            <div class="tab-pane fade" id="pills-ui-ux" role="tabpanel" aria-labelledby="pills-ui-ux-tab"
                tabindex="0">
                ...
            </div>
        </div>
        <div class="section-projects__actions w-100">
            <div class="section-projects__action-row">
                <div class="section__call-to-action-row">
                    <p class="section__call-to-action-text ui text-white text size-btn_text">
                        <!-- Wrap "vie" for individual styling -->
                        <span class="section__feature-bg">view</span> &nbsp; all
                        clients
                    </p>
                    <img src="<?php echo e(asset('assets/front_assets/images/img_arrow.svg')); ?>" alt="arrow image"
                        class="section__call-to-action-icon" />
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/clients-section/clients.blade.php ENDPATH**/ ?>