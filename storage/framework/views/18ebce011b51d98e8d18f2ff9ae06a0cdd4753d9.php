<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Dashboards'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Dashboard
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Welcome !
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-2">
            <div class="card">
                <div class="card-header">
                    <div class="d-grid">
                        <a href="<?php echo e(route('nova.reserva')); ?>">
                            <button class="btn font-16 btn-outline-primary" id="btn-new-event"><i
                                    class="mdi mdi-plus-circle-outline"></i> Criar novo agendamento
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-2">
            <div class="card">
                <div class="card-header">
                    <div class="d-grid">
                        <a href="<?php echo e(route('inicioReserva')); ?>">
                            <button class="btn font-16 btn-outline-success" id="btn-new-event"><i
                                    class="mdi mdi-plus-circle-outline"></i> Reservas cadastradas
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.js')); ?>"></script>

    <!-- dashboard init -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reseva_salas\resources\views/index.blade.php ENDPATH**/ ?>