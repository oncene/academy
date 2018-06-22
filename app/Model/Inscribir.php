<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Inscribir extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'inscribirs';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'carrniv_id', 'estudiante_id', 'fecha',
    ];
}
