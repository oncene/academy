<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calendario extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'calendarios';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'title', 'start', 'end', 'allDay', 'color',
    ];
}
