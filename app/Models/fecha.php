<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fecha extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'fecha';
    protected $fillable = [
        'dia',
        'hora'
    ];



    function persona_actividad(){
        return $this->hasMany(persona_actividad::class);
    }

}
