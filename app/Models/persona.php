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
}
