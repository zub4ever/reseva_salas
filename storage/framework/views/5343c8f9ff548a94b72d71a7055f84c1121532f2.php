











<?php $__env->startSection('title'); ?>
    Reservas
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Reservas
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Detalhes da Reserva
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-12">
            <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <div class="d-grid">
                                    <?php echo $__env->make('reservas.form-show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/@ckeditor/@ckeditor.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/form-editor.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/alert.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reseva_salas\resources\views/reservas/show.blade.php ENDPATH**/ ?>