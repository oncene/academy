<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class CarrnivsemParalelo extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'carrnivsem_paralelos';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'carrnivsem_id', 'paralelo_id',
    ];
}
