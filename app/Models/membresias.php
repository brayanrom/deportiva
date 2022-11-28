<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membresias extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'membresias';
    protected $fillable = [
        'tipo'
    ];
}
