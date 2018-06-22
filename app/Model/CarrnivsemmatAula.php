<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class CarrnivsemmatAula extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'carrnivsemmat_aulas';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'carrnivsemmat_id', 'aula_id',
    ];
}
