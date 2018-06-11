<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Personal extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'logs';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'user_id', 'imagen','ci','expedido','nombres','paterno','materno','fecha_nacimiento','sexo','direccion','ocupacion','estado_civil','email','telefono','celular','historial_academico','especialidad','red_facebook','red_twitter','red_instagram','red_google',
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
