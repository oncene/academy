<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Horario extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'horarios';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'carrnivsemmat_id', 'carrnivsemmatdoce_id', 'carrnivsemmataula_id', 'carrnivsemparal_id', 'hora_id', 'dia_id', 'gestion',
    ];
}
