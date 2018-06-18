<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Color extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'colors';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'descripcion', 'color',
    ];
}
