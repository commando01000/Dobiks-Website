    <div class="row_seven">
        <div class="team-section">
            <div class="team-section__header">
                <div class="section__header">
                    <div class="section__header-row">
                        <p class="section__title ui text size-btn_text">Our Team</p>
                        <div class="section__divider"></div>
                    </div>
                    <h2 class="w-100 section-projects__title ui heading size-headinglg">
                        Meet Our
                    </h2>
                    <h3 class="w-100 section-projects__title ui heading size-headinglg">
                        Leadership
                    </h3>
                </div>
                <div>
                    <div class="team-section__action-row">
                        <div class="section__feature-bg"></div>
                        <div class="team-section__action-content">
                            <p class="section__call-to-action-text ui text size-btn_text">
                                <a class="text-white" href="<?php echo e(route('about-us')); ?>"> view all Leadership<a>
                            </p>
                            <img src="<?php echo e(asset('assets/front_assets/images/img_arrow.svg')); ?>" alt="arrow image"
                                class="section__call-to-action-icon" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-section__members">
                <?php $__currentLoopData = $leaderships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leadership): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('team-details', $leadership->id)); ?>" class="user-profile"
                        style="cursor: pointer;">
                        <img src="<?php echo e(Storage::url($leadership->photo)); ?>" alt="profile image"
                            class="user-profile__image <?php if($loop->index % 2 != 0): ?> pt-4 <?php endif; ?>">
                        <p class="user-profile__name ui text size-textxl">
                            <?php echo e($leadership->name); ?>

                        </p>
                        <p class="user-profile__role ui text size-texts">
                            <?php echo e($leadership->position); ?>

                        </p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="team-section__action-row d-none">
                    <div class="section__feature-bg"></div>
                    <div class="team-section__action-content">
                        <p class="section__call-to-action-text ui text size-btn_text">
                            <a class="text-white" href="<?php echo e(route('about-us')); ?>"> view all Leadership<a>
                        </p>
                        <img src="<?php echo e(asset('assets/front_assets/images/img_arrow.svg')); ?>" alt="arrow image"
                            class="section__call-to-action-icon" />
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/leaderships/section-leadership.blade.php ENDPATH**/ ?>