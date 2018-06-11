<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Configuracion extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'configuracions';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'user_id', 'color_id',
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}