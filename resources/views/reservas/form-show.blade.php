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

                                <select name="reserva_sala_id" class="form-select" disabled>
                                    <option>Selecione a sala desejada</option>
                                    @foreach ($reserva_sala as $sala)
                                        <option value="{{$sala->id}}" {{(empty(old('reserva_sala_id')) ? @$reservas->reserva_sala_id : old('reserva_sala_id')) == $sala->id ? 'selected' : ''}}>
                                            {{$sala->nm_sala}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="reserva_motivo_id" class="form-label">Motivo da reserva:</label>
                                <span class="text-danger">*</span>

                                <select name="reserva_motivo_id" class="form-select" disabled>
                                    <option>Selecione a sala desejada</option>
                                    @foreach ($reserva_motivo as $motivo)
                                        <option value="{{$motivo->id}}" {{(empty(old('reserva_motivo_id')) ? @$reservas->reserva_motivo_id : old('reserva_motivo_id')) == $motivo->id ? 'selected' : ''}}>
                                            {{$motivo->nm_motivo}}
                                        </option>
                                    @endforeach
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
                                           value="{{ date('Y-m-d\TH:i', strtotime(@$reservas->data_hora_inicio)) }}" id="datetime1" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-3 mt-lg-0">
                                <div class="mb-3">
                                    <label for="data_hora_fim" class="form-label">Data e hora do fim</label>
                                    <input class="form-control" name="data_hora_fim" type="datetime-local"
                                           value="{{ date('Y-m-d\TH:i', strtotime(@$reservas->data_hora_fim)) }}" id="datetime2" disabled>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="users_id" class="form-label">Solicitante:</label>
                        <span class="text-danger">*</span>

                        <select name="users_id" class="form-select" disabled>
                            <option>Solicititante da sala</option>
                            @foreach ($user as $users)
                                <option value="{{$users->id}}" {{(empty(old('users_id')) ? @$reservas->users_id : old('users_id')) == $users->id ? 'selected' : ''}}>
                                    {{$users->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="descricao_pedido" class="form-label">Descrição do pedido de agendamento</label>
                                <textarea class="form-control" name="descricao_pedido" rows="2" placeholder="Descrição do pedido" disabled>{{ @$reservas->descricao_pedido }}</textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <div class="col-sm-12 mt-5">
            <div class="wrap mt-1" style="text-align: center;">

                <a class="btn btn-warning" data-toggle="tooltip" data-placement="right"
                   title="Voltar página" href="/reservas" role="button">
                    Voltar
                </a>
            </div>

        </div>
        <br>
    </div>
