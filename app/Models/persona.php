<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $table = 'personas';
    protected $fillable = [
        'nombre',
        'apellido',
        'curp',
        'localidad_id'
    ];

    use HasFactory;


    function localidad(){
        return $this->belongsTo(localidad::class,'localidad_id');
    }

    function persona_actividad(){
        return $this->hasMany(persona_actividad::class);
    }


}
