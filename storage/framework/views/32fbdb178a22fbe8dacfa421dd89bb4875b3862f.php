
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="reserva_sala_id" class="form-label">Sala:</label>
                                    <span class="text-danger">*</span>

                                    <select name="reserva_sala_id" class="form-select">
                                        <option>Selecione a sala desejada</option>
                                        <?php $__currentLoopData = $reserva_sala; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sala): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($sala->id); ?>" <?php echo e((empty(old('reserva_sala_id')) ? @$reservas->reserva_sala_id : old('reserva_sala_id')) == $sala->id ? 'selected' : ''); ?>>
                                                <?php echo e($sala->nm_sala); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="reserva_motivo_id" class="form-label">Motivo da reserva:</label>
                                    <span class="text-danger">*</span>

                                    <select name="reserva_motivo_id" class="form-select">
                                        <option>Selecione a sala desejada</option>
                                        <?php $__currentLoopData = $reserva_motivo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($motivo->id); ?>" <?php echo e((empty(old('reserva_motivo_id')) ? @$reservas->reserva_motivo_id : old('reserva_motivo_id')) == $motivo->id ? 'selected' : ''); ?>>
                                                <?php echo e($motivo->nm_motivo); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label for="data_hora_inicio" class="form-label">Data e hora de inicio</label>
                                        <input class="form-control" name="data_hora_inicio" type="datetime-local"
                                               value="<?php echo e(@$reservas->data_hora_inicio ? date('Y-m-d\TH:i', strtotime(@$reservas->data_hora_inicio)) : ''); ?>" id="datetime1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label for="data_hora_fim" class="form-label">Data e hora do fim</label>

                                        <input class="form-control" name="data_hora_fim" type="datetime-local"
                                               value="<?php echo e(@$reservas->data_hora_fim ? date('Y-m-d\TH:i', strtotime(@$reservas->data_hora_fim)) : ''); ?>" id="datetime2">

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="mb-3">
                                <label for="users_id" class="form-label">Solicitante:</label>
                                <span class="text-danger">*</span>

                                <select name="users_id" class="form-select">
                                    <option>Solicititante da sala</option>
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($users->id); ?>" <?php echo e((empty(old('users_id')) ? @$reservas->users_id : old('users_id')) == $users->id ? 'selected' : ''); ?>>
                                            <?php echo e($users->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="descricao_pedido" class="form-label">Descrição do pedido de agendamento</label>
                                    <textarea class="form-control" name="descricao_pedido" rows="2" placeholder="Descrição do pedido"><?php echo e(@$reservas->descricao_pedido); ?></textarea>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div class="col-sm-12 mt-5">
                <div class="wrap mt-1" style="text-align: center;">
                    <button type="submit" class="btn btn-success">
                        Salvar
                    </button>
                    <a class="btn btn-secondary" data-toggle="tooltip" data-placement="right"
                       title="Voltar página" href="/reservas" role="button">
                        Cancelar
                    </a>
                </div>

            </div>
            <br>
<?php /**PATH C:\xampp\htdocs\Admin\resources\views/reservas/form.blade.php ENDPATH**/ ?>