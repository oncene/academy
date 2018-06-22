<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Administrativo extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'administrativos';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'personal_id', 'ocupacion_institucion', 'historial_academico',
    ];
}
