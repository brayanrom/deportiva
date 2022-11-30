<?php

namespace App\Http\Controllers;
use App\Models\municipio as Municipio;
use App\Models\estado as Estado;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios = DB::select('select id,nombre,estado_id  from municipio');
        foreach($municipios as $municipiosList) {
            $Estado = Estado::findOrFail($municipiosList->estado_id);
            $municipiosList->estado_id=$Estado->nombre;
        }

        return view('municipios.index',compact('municipios'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Estados = Estado::all();
        return view('municipios.create',compact('Estados'));
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'estado_id' => 'required'
        ]);
      
        Municipio::create($request->all());
       
        return redirect()->route('municipios.index')
        ->with('success','Municipio registrado satisfactoriamente.');


        
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function show(Municipio $municipio)
    {
        $Estado = Estado::findOrFail($municipio['estado_id']);
        $municipio['estado_id']=$Estado->nombre;


        return view('municipios.show',compact('municipio'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipio $municipio)
    {
        $Estados = Estado::all();
        return view('municipios.edit',compact('municipio'),compact('Estados'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipio $municipio)
    {
        $request->validate([
            'nombre' => 'required',
            'estado_id' => 'required'
        ]);
        
        $municipio->update($request->all());
        return redirect()->route('municipios.index')
                ->with('success','Municipio Actualizado satisfactoriamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipio $municipio)
    {
        $municipio->delete();
       
        return redirect()->route('municipios.index')
        ->with('success','Municipio Eliminado satisfactoriamente.');
    }
}
