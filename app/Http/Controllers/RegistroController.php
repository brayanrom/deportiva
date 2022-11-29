<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\actividad as Actividad;
use App\Models\principal as Principal;
use App\Models\fecha as Fecha;
use App\Models\persona as Persona;
use App\Models\municipio as Municipio;
use App\Models\estado as Estado;
use App\Models\localidades as Localidad;
use App\Models\tipo_pago as TipoPago;


class RegistroController extends Controller
{ 
    public function insert()
    {
        $localidades = Localidad::all();
        $TipoPagos = TipoPago::all();
        $actividad = Actividad::all();
        $fechas = Fecha::all();

        return view('Principal.Registro'
        ,compact('localidades','TipoPagos','actividad','fechas')
    );
    }




}
