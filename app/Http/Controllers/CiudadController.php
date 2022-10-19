<?php

namespace App\Http\Controllers;
use App\Models\ciudad as Ciudad;

use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = Ciudad::latest()->paginate(5);
      
        return view('ciudades.index',compact('ciudades'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciudades.create');
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
      
        Ciudad::create($request->all());
       
        return redirect()->route('ciudades.index')
        ->with('success','Ciudad registrada satisfactoriamente.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudad $ciudad)
    {
        return view('ciudades.show',compact('ciudad'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudad $ciudad)
    {
        return view('ciudades.edit',compact('ciudad'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudad $ciudad)
    {
        $request->validate([
            'nombre' => 'required',
            'estado_id' => 'required'
        ]);
      
        $ciudad->update($request->all());
      
        return redirect()->route('ciudades.index')
        ->with('success','Ciudad Actualizada satisfactoriamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
       
        return redirect()->route('ciudades.index')
        ->with('success','Ciudad Eliminada satisfactoriamente.');
    }
}