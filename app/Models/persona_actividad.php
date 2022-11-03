<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona_actividad extends Model
{
    use HasFactory;
    protected $table = 'persona_actividads';
    protected $fillable = [
        'persona_id',
        'actividad_id',
        'fechas_id'
    ];}
