<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pagos';
    protected $fillable = [
        'folio_id',
        'pagado',
        'mensualidad_a_pagar'
    ];



    function familias(){
        return $this->belongsTo(familias::class,'folio_id');

    }





}
