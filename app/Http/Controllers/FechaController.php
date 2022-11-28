<?php

namespace App\Http\Controllers;
use App\Models\fecha as Fecha;

use Illuminate\Http\Request;

class FechaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fecha = Fecha::all();
        return view('fecha.index',compact('fecha'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fecha.create');
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
            'dia' => 'required',
            'hora' => 'required'
        ]);
        Fecha::create($request->all());
        return redirect()->route('fecha.index')
                        ->with('success','fecha creada satisfactoriamente.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fecha  $fecha
     * @return \Illuminate\Http\Response
     */
    public function show(Fecha $fecha)
    {
        return view('fecha.show',compact('fecha'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fecha  $fecha
     * @return \Illuminate\Http\Response
     */
    public function edit(Fecha $fecha)
    {
        return view('fecha.edit',compact('fecha'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fecha  $fecha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fecha $fecha)
    {
        $request->validate([
            'dia' => 'required',
            'hora' => 'required'
        ]);
      
        $fecha->update($request->all());
        return redirect()->route('fecha.index')
                    ->with('success','fecha actualizada satisfactoriamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fecha  $fecha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fecha $fecha)
    {
        $fecha->delete();
        return redirect()->route('fecha.index')
                        ->with('success','fecha eliminada satisfactoriamente');
    }
}