<?php $__env->startSection('title'); ?>
Reservas
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('assets/libs/datatables.net-buttons-bs4/datatables.net-buttons-bs4.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Reservas <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Reservas <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <style>
        .msg{
            background-color: green;
            color: #f0f0f0;
            border: 1px solid #f8f8f8;
            width: 100%;
            margin-bottom: 0;
            text-align: center;
            padding: 10px;
        }
    </style>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-grid">
                        <a href="<?php echo e(route('nova.reserva')); ?>">
                            <button class="btn font-16 btn-primary" id="btn-new-event"><i
                                    class="mdi mdi-plus-circle-outline"></i> Criar novo agendamento
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Reservas Cadastradas</h4>
                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Data e Hora do inicio</th>
                            <th class="text-center">Data e Hora do fim</th>
                            <th class="text-center">Sala agendada</th>
                            <th class="text-center">Motivo do agendamento</th>
                            <th class="text-center">Solicitante</th>
                            <th class="text-center">Ação</th>

                        </tr>
                        </thead>

                        <tbody>
                        <?php $__currentLoopData = $reservas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserva): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($reserva->reserva_id); ?></td>
                                <td class="text-center"><?php echo e(date('d/m/Y H:i', strtotime($reserva->data_hora_inicio))); ?></td>
                                <td class="text-center"><?php echo e(date('d/m/Y H:i', strtotime($reserva->data_hora_fim))); ?></td>
                                <td class="text-center"><?php echo e($reserva->nm_sala); ?></td>
                                <td class="text-center"><?php echo e($reserva->nm_motivo); ?></td>
                                <td class="text-center"><?php echo e($reserva->name); ?></td>
                                <td class="text-center">
                                    <div class="d-inline-flex">
                                        <a class="btn btn-outline-pink btn-sm" title="Detalhes" href="<?php echo e(route('showDetalhes', $reserva->reserva_id)); ?>">
                                            <i class="fas fa-indent"></i>
                                        </a>
                                        <a class="btn btn-outline-info btn-sm edit" title="Edit" href="<?php echo e(route('editarReserva', $reserva->reserva_id)); ?>">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <form action="<?php echo e(route('destroy', $reserva->reserva_id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm edit" title="Deletar">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>



                    </table>
                </div>
            </div>
            <!-- end cardaa -->
        </div> <!-- end col -->
    </div> <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/datatables.net/datatables.net.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/datatables.net-buttons/datatables.net-buttons.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/datatables.net-buttons-bs4/datatables.net-buttons-bs4.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/datatables.net-responsive/datatables.net-responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/datatables.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reseva_salas\resources\views/reservas/index.blade.php ENDPATH**/ ?>