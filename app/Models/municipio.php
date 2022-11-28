<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'municipio';
    protected $fillable = [
        'nombre',
        'estado_id'
    ];
    
    public function estado()
    {
        return $this->belongsTo(estado::class,'estado_id');
    }
}
