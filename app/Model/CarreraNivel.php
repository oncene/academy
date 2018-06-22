<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class CarreraNivel extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'carrera_nivels';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'carrera_id', 'nivel_id',
    ];

    public function CarrnivSemestre() {
        return $this->hasMany('App\Model\CarrnivSemestre');
    }
}
