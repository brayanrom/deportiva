<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    protected $table = 'estado';
    protected $fillable = [
        'nombre'
    ];
    use HasFactory, SoftDeletes;
    public function municipio()
    {
        return $this->hasMany(municipio::class);
    }
}
