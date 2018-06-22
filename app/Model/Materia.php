<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Materia extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'materias';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'nombre', 'sigla', 'carga_horaria',
    ];
}
