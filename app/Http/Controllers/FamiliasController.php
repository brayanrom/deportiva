<?php

namespace App\Http\Controllers;
use App\Models\familias as Familia;
use App\Models\persona as Persona;

use Illuminate\Http\Request;

class FamiliasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        $familias = Familia::latest()->paginate(5);
        return view('familias.index',compact('familias'),compact('personas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::all();
        return view('familias.create',compact('personas'));
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
            'folio' => 'required',
            'persona_id' => 'required'
        ]);
      
        Familia::create($request->all());
       
        return redirect()->route('familias.index')
        ->with('success','Familia registrada satisfactoriamente.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function show(Familia $familia)
    {
        $personas = Persona::all();
        return view('familias.show',compact('familia'),compact('personas'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function edit(Familia $familia)
    {
        return view('familias.edit',compact('familia'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Familia $familia)
    {
        $request->validate([
            'folio' => 'required',
            'persona_id' => 'required'
        ]);
      
        $familia->update($request->all());
      
        return redirect()->route('familias.index')
        ->with('success','Familia Actualizada satisfactoriamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Familia $familia)
    {
        $familia->delete();
       
        return redirect()->route('familias.index')
        ->with('success','Familia Eliminada satisfactoriamente.');
    }
}
