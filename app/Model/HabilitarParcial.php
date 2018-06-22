<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class HabilitarParcial extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'habilitar_parcials';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'parcial_id', 'fecha_inicio', 'fecha_fin',
    ];
}
