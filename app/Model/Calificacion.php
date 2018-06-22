<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Calificacion extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'calificacions';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id', 'matriculacion_id', 'parcial_id', 'fecha', 'parcial_primero', 'total_asistencia', 'porcentaje_asistencia', 'desarrollo_habilidad', 'manejo_herramienta', 'capacidad_observacion', 'aplicacion_seguridad', 'evaluacion_practica', 'comprension_conocimiento', 'terminos_tecnicos', 'conocimiento', 'emprendimiento_invetigacion', 'evaluacion_teorica', 'puntual_trabajo', 'estudio_evaluacion', 'aporte_grupal', 'orden_aula', 'autoevaluacion', 'suma_media_parcial', 'cooperacion_grupal', 'respeto', 'preocupa_companieros', 'llegada_puntual', 'coevaluacion', 'total_parcial', 'promedio_parcial',
    ];
}
