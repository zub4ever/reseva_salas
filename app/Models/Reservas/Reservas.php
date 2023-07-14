<?php

namespace App\Models\Reservas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    use HasFactory;

    protected $table = 'reservas';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'data_hora_inicio',
        'data_hora_fim',
        'descricao_pedido',
        'reserva_sala_id',
        'reserva_motivo_id',
        'users_id',


    ];
    protected $guarded = [];


}
