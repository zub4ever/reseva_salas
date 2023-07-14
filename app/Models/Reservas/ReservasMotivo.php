<?php

namespace App\Models\Reservas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservasMotivo extends Model
{
    use HasFactory;

    protected $table = 'reserva_motivo';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        ' nm_motivo',
    ];
    protected $guarded = [];


}
