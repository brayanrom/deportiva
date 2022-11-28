<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona_actividad extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'persona_actividad';
    protected $fillable = [
        'persona_id',
        'actividad_id',
        'fechas_id'
    ];

    function persona(){
        return $this->belongsTo(persona::class,'persona_id');
    }
    function actividades(){
        return $this->belongsTo(actividad::class,'actividad_id');
    }
    function fechas(){
        return $this->belongsTo(fecha::class,'fechas_id');
    }
}