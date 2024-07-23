

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
                                src="<?php echo e(Storage::url($teamMember->photo)); ?>" alt="image">
                            <form chip-view="" id="1:112" class="footer__social-chips">
                                <label tabindex="0" class="flex-row-center-center footer__social-chip--creative">
                                    <a href="<?php echo e($teamMember->facebook); ?>"> <input type="button" name="selectedChipOptions"
                                            value="1" hidden="true"></a>
                                    <span> Facebook</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>

                                <label tabindex="0" class="flex-row-center-center footer__social-chip--uiux">
                                    <a href="<?php echo e($teamMember->linkedin); ?>"> <input type="button" name="selectedChipOptions"
                                            value="3" hidden="true"></a>
                                    <span> LinkedIN</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>
                                <label tabindex="0" class="flex-row-center-center footer__social-chip--video">
                                    <a href="<?php echo e($teamMember->github); ?>"> <input type="button" name="selectedChipOptions"
                                            value="4" hidden="true"></a>
                                    <span> GITHUB</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>
                                <label tabindex="0" class="flex-row-center-center footer__social-chip--marketing">
                                    <a href="<?php echo e($teamMember->dribble); ?>"> <input type="button" name="selectedChipOptions"
                                            value="5" hidden="true"></a>
                                    <span> DRIBBLE</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="user-profile__details">
                                <h1 class="user-profile__title"><?php echo e($teamMember->name); ?></h1>
                                <p class="user-profile__role"><?php echo e($teamMember->position); ?></p>
                                <br>
                                
                                <div class="blog-detail w-100" style="color:#fff;">
                                    <?php echo e($teamMember->bio); ?>

                                </div>


                                
                                <div class="col-md-9">
                                    <div class="progress-bars-section overflow-visible pt-2">
                                        <?php $__currentLoopData = $teamMember->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <p class="content-section__description ui text size-textmd">
                                                <?php echo e($detail->category); ?>

                                            </p>
                                            <div style="height: 5px;" class="progress overflow-visible mb-2"
                                                role="progressbar" aria-label="<?php echo e($detail->category); ?> example"
                                                aria-valuenow="<?php echo e($detail->number); ?>" aria-valuemin="0"
                                                aria-valuemax="100">
                                                <div class="progress-bar" style="width: <?php echo e($detail->number); ?>%">
                                                    <span style="top: -15px"
                                                        class="mb-2 position-absolute"><?php echo e($detail->number); ?>%</span>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/team-details/index.blade.php ENDPATH**/ ?>