<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class CarrnivDocente extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'carrniv_docentes';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'carrniv_id', 'docente_id',
    ];
}
