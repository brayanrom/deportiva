<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'actividad';
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    function persona_actividad(){
            return $this->hasMany(persona_actividad::class);
    }
}