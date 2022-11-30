<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\principal as Principal;
use App\Models\fecharesumen as Fecha;

class PrincipalController extends Controller
{ 
    public function menu()
    {
        $ResumenPersonaActividades = Principal::all();
        $ResumenFechas = Fecha::all();

        return view('Principal.index',
                                    compact('ResumenPersonaActividades'),
                                    compact('ResumenFechas'));
    }
}
