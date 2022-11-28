<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class familias extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'familias';
    protected $fillable = [
        'folio',
        'persona_id'
    ];

    function persona(){
        return $this->belongsTo(persona::class,'persona_id');
    }

    function pagos(){
        return $this->hasMany(pagos::class);
    }
}