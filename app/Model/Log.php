<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Log extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'logs';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'user_id', 'login_fecha','login_ip',
    ];
}
