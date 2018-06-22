<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Docente extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'docentes';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'personal_id', 'especialidad', 'historial_academico', 'experiencia',
    ];
}
