<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\principal as Principal;
use App\Models\fecharesumen as Fecha;

class RegistroController extends Controller
{ 
    public function menu()
    {
        return view('Registro.index');
    }



    
}
