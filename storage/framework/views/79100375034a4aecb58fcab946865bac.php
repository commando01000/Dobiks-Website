<?php $__env->startSection('title', __('Landing Page')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Menu Settings')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), ['']); ?></li>
            <li class="breadcrumb-item"><?php echo e(__('Menu Settings')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <h5><?php echo e(__('Link')); ?></h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php echo Form::open([
                        'route' => 'menu.store',
                        'method' => 'Post',
                        'class' => 'form-horizontal',
                        'data-validate',
                        'no-validate',
                    ]); ?>

                    <input type="hidden" value="link" name="type">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo e(Form::label('slug', __('Full url'), ['class' => 'form-label'])); ?>

                                <?php echo Form::text('slug', null, [
                                    'class' => 'form-control',
                                    'placeholder' => __('Enter url'),
                                ]); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('title', __('Link Title'), ['class' => 'form-label'])); ?>

                                <?php echo Form::text('title', null, [
                                    'class' => 'form-control',
                                    'placeholder' => __('Enter Link Title'),
                                ]); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo e(Form::label('page_id', __('Select Page'), ['class' => 'form-label'])); ?>

                                <select name="parent_id" class="form-control">
                                    <option value="0"><?php echo e(__('Main link')); ?></option>
                                    <?php $__currentLoopData = $MainMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($record['id']); ?>"><?php echo e(__('Sub-link below')); ?> (<?php echo e($record['title']); ?>)</option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-end">
                                <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                            </div>
                        </div>
                    </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <h5><?php echo e(__('Pages')); ?></h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
            <?php echo Form::open([
                'route' => 'menu.store',
                'method' => 'Post',
                'class' => 'form-horizontal',
                'data-validate',
                'no-validate',
            ]); ?>

                    <input type="hidden" value="page" name="type">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo e(Form::label('page_id', __('Select Page'), ['class' => 'form-label'])); ?>

                                <?php echo Form::select('page_id', $pages, null, ['class' => 'form-control', 'required', 'data-trigger']); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo e(Form::label('page_id', __('Select Page'), ['class' => 'form-label'])); ?>

                                <select name="parent_id" class="form-control">
                                    <option value="0"><?php echo e(__('Main link')); ?></option>
                                    <?php $__currentLoopData = $MainMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($record['id']); ?>"><?php echo e(__('Sub-link below')); ?> (<?php echo e($record['title']); ?>)</option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-end">
                                <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                            </div>
                        </div>
                    </div>
            <?php echo e(Form::close()); ?>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <h5><?php echo e(__('Pages')); ?></h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php echo Form::open([
                        'route' => 'menu.store',
                        'method' => 'Post',
                        'class' => 'form-horizontal',
                        'data-validate',
                        'no-validate',
                    ]); ?>

                    <input type="hidden" value="system" name="type">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo e(Form::label('system_id', __('Select Serves'), ['class' => 'form-label'])); ?>

                                <select name="slug" class="form-control">
                                    <?php $__currentLoopData = $system; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($k); ?>"><?php echo e($record); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo e(Form::label('parent_id', __('Select Page'), ['class' => 'form-label'])); ?>

                                <select name="parent_id" class="form-control">
                                    <option value="0"><?php echo e(__('Main link')); ?></option>
                                    <?php $__currentLoopData = $MainMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($record['id']); ?>"><?php echo e(__('Sub-link below')); ?> (<?php echo e($record['title']); ?>)</option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-end">
                                <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                            </div>
                        </div>
                    </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>

        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h5><?php echo e(__('Main Menu')); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table"  id="sortable-table">
                                    <thead>
                                        <tr>
                                            <th width="50px">#</th>
                                            <th width="50px"></th>
                                            <th><?php echo e(__('Menu Name')); ?></th>
                                            <th width="150px"><?php echo e(__('Action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($MainMenus) || is_object($MainMenus)): ?>
                                            <?php $ff_no = 1; ?>
                                            <?php $__currentLoopData = $MainMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $MainMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr data-id="<?php echo e($MainMenu['id']); ?>">
                                                    <td>
                                                        <?php if($key !=0): ?>
                                                        <div>
                                                           <a href="/cp/menu/sort/<?php echo e($MainMenu['id']); ?>/<?php echo e($MainMenus[$key-1]['id']); ?>"><i class=" ti ti-arrow-up"></i></a>
                                                        </div>
                                                        <?php endif; ?>
                                                        <?php if(isset($MainMenus[$key+1])): ?>
                                                        <div>
                                                            <a href="/cp/menu/sort/<?php echo e($MainMenu['id']); ?>/<?php echo e($MainMenus[$key+1]['id']); ?>"><i class=" ti ti-arrow-down"></i></a>
                                                        </div>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td></td>
                                                    <td><?php echo e($MainMenu['title']); ?></td>
                                                    <td>
                                                        <span class="d-flex">
                                                            <div>
                                                                <a href="<?php echo e(route('menu.edit', $MainMenu->id)); ?>"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="bottom"
                                                                    class="btn btn-sm btn-primary mx-1 main_menu_edit"
                                                                    data-bs-original-title="<?php echo e(__('Edit')); ?>">
                                                                    <i class="ti ti-pencil text-light"></i>
                                                                </a>
                                                            </div>

                                                            <?php echo Form::open([
                                                                'method' => 'DELETE',
                                                                'class' => 'd-inline',
                                                                'route' => ['menu.delete', $MainMenu->id],
                                                                'id' => 'delete-form-' . $MainMenu->id,
                                                            ]); ?>

                                                            <a href="javascript:void(0);"
                                                                class="btn btn-sm small btn btn-danger show_confirm"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                id="delete-form-1"
                                                                data-bs-original-title="<?php echo e(__('Delete')); ?>">
                                                                <i class="ti ti-trash text-white"></i>
                                                            </a>
                                                            <?php echo Form::close(); ?>

                                                        </span>
                                                    </td>
                                                </tr>
                                                <?php $subff_no = 1;
                                                ?>
                                                <?php $__currentLoopData = $MainMenu['SubMenus']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $SubMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr data-id="<?php echo e($SubMenu['id']); ?>">
                                                        <td></td>
                                                        <td> <?php if($key !=0): ?>
                                                                <div>
                                                                    <a href="/cp/menu/sort/<?php echo e($SubMenu['id']); ?>/<?php echo e($MainMenu['SubMenus'][$key-1]['id']); ?>"><i class=" ti ti-arrow-up"></i></a>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(isset($MainMenu['SubMenus'][$key+1])): ?>
                                                                <div>
                                                                    <a href="/cp/menu/sort/<?php echo e($SubMenu['id']); ?>/<?php echo e($MainMenu['SubMenus'][$key+1]['id']); ?>"><i class=" ti ti-arrow-down"></i></a>
                                                                </div>
                                                            <?php endif; ?></td>
                                                        <td><?php echo e($SubMenu['title']); ?></td>
                                                        <td>
                                                        <span class="d-flex">
                                                            <div>
                                                                <a href="<?php echo e(route('menu.edit', $SubMenu->id)); ?>"
                                                                   data-bs-toggle="tooltip"
                                                                   data-bs-placement="bottom"
                                                                   class="btn btn-sm btn-primary mx-1 main_menu_edit"
                                                                   data-bs-original-title="<?php echo e(__('Edit')); ?>">
                                                                    <i class="ti ti-pencil text-light"></i>
                                                                </a>
                                                            </div>

                                                            <?php echo Form::open([
                                                                'method' => 'DELETE',
                                                                'class' => 'd-inline',
                                                                'route' => ['menu.delete', $SubMenu->id],
                                                                'id' => 'delete-form-' . $SubMenu->id,
                                                            ]); ?>

                                                            <a href="javascript:void(0);"
                                                               class="btn btn-sm small btn btn-danger show_confirm"
                                                               data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                               id="delete-form-1"
                                                               data-bs-original-title="<?php echo e(__('Delete')); ?>">
                                                                <i class="ti ti-trash text-white"></i>
                                                            </a>
                                                            <?php echo Form::close(); ?>


                                                        </span>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/menu/index.blade.php ENDPATH**/ ?>