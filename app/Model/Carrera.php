<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Carrera extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'carreras';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'nombre', 'resolucion', 'mension_id',
    ];
}
