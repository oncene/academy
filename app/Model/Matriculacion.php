<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Matriculacion extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'matriculacions';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'carrnivsemmat_id', 'carrnivsemparal_id', 'inscribir_id', 'fecha',
    ];
}
