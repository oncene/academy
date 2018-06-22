<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class CarrnivSemestre extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'carrniv_semestres';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'carrniv_id', 'semestre_id',
    ];


    public function CarreraNivel() {
        return $this->belongsToMany('App\Model\CarreraNivel', 'carrniv_semestres','carrniv_id')->withTimestamps();
    }
    public function Semestre() {
        return $this->belongsToMany('App\Model\Semestre', 'carrniv_semestres','carrniv_id')->withTimestamps();
    }
}
