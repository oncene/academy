<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Hora extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'horas';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'hora_inicio', 'hora_fin', 'turno',
    ];
}
