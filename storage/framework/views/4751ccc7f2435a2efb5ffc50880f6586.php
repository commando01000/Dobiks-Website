<?php
    $languages = \App\Facades\UtilityFacades::languages();
    config([
        'captcha.sitekey' => Utility::getsettings('recaptcha_key'),
        'captcha.secret' => Utility::getsettings('recaptcha_secret'),
    ]);
?>

<?php $__env->startSection('title', __('Sign in')); ?>

<?php $__env->startSection('content'); ?>
    <div class="login-page-wrapper">
        <div class="login-container">
            <div class="login-row d-flex">
                <div class="login-col-12" style="margin: auto;">
                    <div class="login-content-inner ">
                        <div class="login-title">
                            <h3><?php echo e(__('Sign In')); ?></h3>
                        </div>
                        <?php echo e(Form::open(['route' => ['login'], 'method' => 'POST', 'data-validate', 'class' => 'needs-validation'])); ?>

                        <div class="mb-3 form-group">
                            <?php echo e(Form::label('email', __('Email'), ['class' => 'form-label mb-2'])); ?>

                            <?php echo Form::email('email', old('email'), [
                                'class' => 'form-control',
                                'id' => 'email',
                                'placeholder' => __('Enter email address'),
                                'onfocus',
                                'required',
                            ]); ?>

                        </div>
                        <div class="mb-3 form-group">
                            <div class="col-md-12">
                                <?php echo e(Form::label('password', __('Enter Password'), ['class' => 'form-label'])); ?>

                                <?php echo Form::password('password', [
                                    'class' => 'form-control',
                                    'placeholder' => __('Enter password'),
                                    'required',
                                    'tabindex' => '2',
                                    'id' => 'password',
                                    'autocomplete' => 'current-password',
                                ]); ?>

                            </div>
                        </div>
                        <?php if(Utility::getsettings('login_recaptcha_status') == '1'): ?>
                        <div class="my-3 text-center">
                            <?php echo NoCaptcha::renderJs(); ?>

                                <?php echo NoCaptcha::display(); ?>

                            </div>
                        <?php endif; ?>
                        <div class="d-grid">
                            <?php echo Form::button(__('Sign In'), ['type' => 'submit', 'class' => 'btn btn-primary btn-block mt-3']); ?>

                        </div>
                        <?php echo e(Form::close()); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/auth/login.blade.php ENDPATH**/ ?>