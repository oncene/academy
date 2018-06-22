<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Vencido extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'vencidos';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'carrnivsem_id', 'carrnivsemmat_id', 'inscribir_id', 'estado',
    ];
}
