<div id="services-content" class="w-100 mt-5 pt-5 m-auto p-1">
    <div class="services-content">
        <h2 class="section-projects__title ui heading size-headinglg">
            <span class="section-projects__title-span-1">client <span
                    class="section-projects__title-span">Categories&nbsp;</span>
            </span>
            
        </h2>
        <!-- resources/views/projects/index.blade.php -->
        <ul class="nav nav-pills section__tabs" id="pills-tab" role="tablist">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item" role="presentation">
                    <button
                        class="position-relative nav-link <?php echo e($loop->first ? 'active' : ''); ?> text-decoration-none section__tab-item"
                        id="pills-<?php echo e($category->id); ?>-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-<?php echo e($category->id); ?>" type="button" role="tab"
                        aria-controls="pills-<?php echo e($category->id); ?>" aria-selected="false" tabindex="0"
                        style="cursor: pointer" onclick="loadServices(<?php echo e($category->id); ?>)">
                        <div class="circle position-absolute start-0 z-0"></div>
                        <div class="position-relative text z-1 text-white">
                            <?php echo e($category->name); ?>

                        </div>
                    </button>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="services-list" role="tabpanel"
                aria-labelledby="services-list-tab">
                <!-- Projects will be loaded here dynamically -->
            </div>
        </div>
    </div>
</div>


<?php /**PATH D:\company\backend\resources\views/front/services/services-section.blade.php ENDPATH**/ ?>