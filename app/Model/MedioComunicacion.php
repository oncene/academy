<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class MedioComunicacion extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'medio_comunicacions';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'nombre',
    ];
}
