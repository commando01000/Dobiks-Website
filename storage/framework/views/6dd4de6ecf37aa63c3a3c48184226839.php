<?php $__env->startSection('content'); ?>
    <section id="projects" class="w-100 mt-0 p-1 overflow-hidden">
        <main class="container-fluid ps-0 pe-0">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    <?php echo e(Utility::getsettings('project_name')); ?>

                </h1>
                <small class="content-section__description fs-6">HOME / SERVICES</small>
            </div>
            <div id="projects-content" class="w-100 mt-5 pt-5 m-auto p-1">
                <div class="projects-content">
                    <h2 class="section-projects__title ui heading size-headinglg">
                        <span class="section-projects__title-span-1">D<span
                                class="section-projects__title-span">opiks<br>Services Page&nbsp;</span>
                        </span>
                        <br>
                        <p class="content-section__description pt-3"><?php echo e(Utility::getsettings('project_detail')); ?></p>

                    </h2>
                    <ul class="nav nav-pills section-projects__content mb-3 filtering" id="pills-tab" role="tablist">
                        <button class="position-relative nav-link text-decoration-none section__tab-item active"
                            data-filter="*" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
                            type="button" role="tab" aria-controls="pills-all" aria-selected="true">
                            <div class="circle position-absolute start-0 z-0"></div>
                            <div class="position-relative text z-1 text-white">
                                All
                            </div>
                        </button>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item" role="presentation">
                                <button class="position-relative nav-link text-decoration-none section__tab-item"
                                    data-filter=".category-<?php echo e($category->id); ?>" id="pills-<?php echo e($category->id); ?>-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-<?php echo e($category->id); ?>" type="button"
                                    role="tab" aria-controls="pills-<?php echo e($category->id); ?>" aria-selected="false">

                                    <div class="circle position-absolute start-0 z-0"></div>
                                    <div class="position-relative text z-1 text-white">
                                        <?php echo e($category->name); ?>

                                    </div>
                                </button>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="tab-content w-100" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-creative-design" role="tabpanel"
                            aria-labelledby="pills-creative-design-tab" tabindex="0">
                            <div class="container">
                                <div class="row gx-3 gy-3">
                                    <?php $__currentLoopData = $allProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-4">
                                            <div class="service">
                                                <div class="service-header d-flex justify-content-between">
                                                    <div class="service-number">
                                                        <p><?php echo e($loop->iteration); ?></p>
                                                    </div>
                                                    <div class="category-name">
                                                        <p class="user-profile__role ui text size-texts">
                                                            <?php echo e($project->title); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="service__image">
                                                    <img src="<?php echo e(Storage::url($project->cover)); ?>" alt="image">
                                                </div>
                                                <div class="service-title mt-4">
                                                    <?php echo e($project->client); ?>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                                <div class="tab-pane fade" id="pills-motion-graphics" role="tabpanel"
                                    aria-labelledby="pills-motion-graphics-tab" tabindex="0">
                                    ...
                                </div>
                                <div class="tab-pane fade" id="pills-video-shooting" role="tabpanel"
                                    aria-labelledby="pills-video-shooting-tab" tabindex="0">
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
                                <div class="tab-pane fade" id="pills-ui-ux" role="tabpanel"
                                    aria-labelledby="pills-ui-ux-tab" tabindex="0">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.filtering button');
            const projects = document.querySelectorAll('.project-item');

            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');

                    // Remove active class from all buttons
                    buttons.forEach(btn => btn.classList.remove('active'));

                    // Add active class to the clicked button
                    this.classList.add('active');

                    // Filter projects
                    projects.forEach(project => {
                        if (filter === '*' || project.classList.contains(filter.slice(1))) {
                            project.style.display = 'block';
                        } else {
                            project.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/front/project/view-all-projects.blade.php ENDPATH**/ ?>