<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\principal as Principal;

class PrincipalController extends Controller
{


    public function menu()
    {
        $ResumenPersonaActividades = Principal::all();
        return view('Principal.index',compact('ResumenPersonaActividades'));
    }
  






}
