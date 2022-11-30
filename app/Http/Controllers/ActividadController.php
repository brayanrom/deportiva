<?php

namespace App\Http\Controllers;
use App\Models\actividad as Actividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividad = DB::select('select id,nombre,descripcion from actividad');

        return view('actividad.index',compact('actividad'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividad.create');
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
            'descripcion' => 'required'
        ]);
        Actividad::create($request->all());
        return redirect()->route('actividad.index')
                        ->with('success','actividad creada satisfactoriamente.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividad)
    {
        return view('actividad.show',compact('actividad'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividad)
    {
        return view('actividad.edit',compact('actividad'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividad $actividad)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
      
        $actividad->update($request->all());
        return redirect()->route('actividad.index')
                    ->with('success','actividad actualizado satisfactoriamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividad.index')
                        ->with('success','actividad eliminada satisfactoriamente');
    }
}