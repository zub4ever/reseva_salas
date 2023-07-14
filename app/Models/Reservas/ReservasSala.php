<?php

namespace App\Models\Reservas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservasSala extends Model
{
    use HasFactory;

    protected $table = 'reserva_sala';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        ' nm_sala',
    ];
    protected $guarded = [];


}
