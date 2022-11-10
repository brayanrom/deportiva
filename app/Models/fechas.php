<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fechas extends Model
{
    use HasFactory;
    protected $table = 'fechas';
    protected $fillable = [
        'dia',
        'hora'
    ];



    function persona_actividad(){
        return $this->hasMany(persona_actividad::class);
    }

}
