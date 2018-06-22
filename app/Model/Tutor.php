<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tutor extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'tutors';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'ci', 'expedido', 'nombres', 'paterno', 'materno', 'fecha_nacimiento', 'sexo', 'dir_provincia', 'dir_zona', 'dir_calle', 'dir_nro', 'estado_civil', 'ocupacion', 'email', 'telefono', 'celular',
    ];
}
