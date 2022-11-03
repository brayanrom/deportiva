<?php

namespace App\Http\Controllers;
use App\Models\persona as Persona;
use App\Models\municipio as Municipio;
use App\Models\estado as Estado;
use App\Models\localidades as Localidad;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::latest()->paginate(5);
      
        return view('personas.index',compact('personas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $localidades = Localidad::all();
        return view('personas.create',compact('localidades'));
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
            'apellido' => 'required',
            'curp' => 'required',
            'localidad_id'=>'required'
        ]);
      
        Persona::create($request->all());
       
        return redirect()->route('personas.index')
        ->with('success','Persona registrada satisfactoriamente.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        $Localidad = Localidad::findOrFail($persona['localidad_id']);
        $persona['localidad_id']=$Localidad->tipo;
        return view('personas.show',compact('persona'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        $localidades = Localidad::all();
        return view('personas.edit',compact('persona'),compact('localidades'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'curp' => 'required',
            'localidad_id'=>'required'
        ]);
      
        $persona->update($request->all());
      
        return redirect()->route('personas.index')
        ->with('success','Persona Actualizada satisfactoriamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
       
        return redirect()->route('personas.index')
        ->with('success','Persona Eliminada satisfactoriamente.');
    }
}