<?php $__env->startSection('title', __('Testimonials')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Testimonials')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'),__('Dashboard'),['']); ?></li>
            <li class="breadcrumb-item"><?php echo e(__('Testimonials')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                <?php if(Auth::user()->can('create-testimonial')): ?>
                    <div class="float-left">
                        <a href="<?php echo e(route('testimonial.create')); ?>" class="btn btn-light-primary"><?php echo e(__('Create Testimonial')); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><?php echo e(__('No')); ?></th>
                <th><?php echo e(__('Name')); ?></th>
                <th><?php echo e(__('Title')); ?></th>
                <th><?php echo e(__('Image')); ?></th>
                <th><?php echo e(__('Status')); ?></th>
                <th><?php echo e(__('Star Rating')); ?></th>
                <th><?php echo e(__('Created At')); ?></th>
                <th><?php echo e(__('Action')); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($index + 1); ?></td>
                    <td><?php echo e($testimonial->name); ?></td>
                    <td><?php echo e($testimonial->title); ?></td>
                    <td>
                        <?php if($testimonial->image): ?>
                            <img src="<?php echo e(Storage::url($testimonial->image)); ?>" style="width:60px;">
                        <?php else: ?>
                            <img src="<?php echo e(Storage::url('not-exists-data-images/350x250.png')); ?>" style="width:60px;">
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input chnageStatus" type="checkbox" role="switch" id="<?php echo e($testimonial->id); ?>" data-url="<?php echo e(route('testimonial.status', $testimonial->id)); ?>" <?php echo e($testimonial->status == 1 ? 'checked' : ''); ?>>
                        </div>
                    </td>
                    <td>
                        <div class="text-left">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <?php if($testimonial->rating < $i): ?>
                                    <?php if(is_float($testimonial->rating) && (round($testimonial->rating) == $i)): ?>
                                        <i class="text-warning fas fa-star-half-alt"></i>
                                    <?php else: ?>
                                        <i class="fas fa-star"></i>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <i class="text-warning fas fa-star"></i>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <br><span class="theme-text-color">(<?php echo e(number_format($testimonial->rating, 1)); ?>)</span>
                        </div>
                    </td>
                    <td><?php echo e(App\Facades\UtilityFacades::date_time_format($testimonial->created_at)); ?></td>
                    <td>
                        <?php echo $__env->make('back.testimonials.action', ['row' => $testimonial], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    document.querySelectorAll('.chnageStatus').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            let url = this.dataset.url;
            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    status: this.checked ? 1 : 0,
                }),
            }).then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            }).then(data => {
                if (!data.success) {
                    this.checked = !this.checked;
                    alert('Failed to change status');
                }
            }).catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                this.checked = !this.checked;
                alert('Failed to change status');
            });
        });
    });
</script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/testimonials/index.blade.php ENDPATH**/ ?>