<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class CarrnivsemMateria extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'carrnivsem_materias';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'carrnivsem_id', 'materia_id',
    ];
}
