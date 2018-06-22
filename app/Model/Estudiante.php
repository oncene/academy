<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Estudiante extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'estudiantes';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'personal_id', 'profesion_futuro',
    ];
}
