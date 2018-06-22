<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Semestre extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'semestres';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'nombre',
    ];
    public function CarrnivSemestre() {
        return $this->belongsTo('App\Model\CarrnivSemestre');
    }
}
