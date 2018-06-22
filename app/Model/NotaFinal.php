<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class NotaFinal extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'nota_finals';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'matriculacion_id', 'fecha', 'parcial_primero', 'parcial_segundo', 'parcial_tercero', 'nota_final', 'estado',
    ];
}
