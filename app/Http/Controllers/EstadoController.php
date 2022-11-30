<?php

namespace App\Http\Controllers;
use App\Models\estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class estadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $estados = estado::all();
        // return view('estados.index',compact('estados'));

        $estados = DB::select('select id,nombre from estado');

        return view('estados.index',compact('estados'));
        }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estados.create');
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
            'nombre' => 'required'
        ]);
        estado::create($request->all());
        return redirect()->route('estados.index')
                        ->with('success','estado creado satisfactoriamente.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(estado $estado)
    {
        return view('estados.show',compact('estado'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(estado $estado)
    {
        return view('estados.edit',compact('estado'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estado $estado)
    {
        $request->validate([
            'nombre' => 'required'
        ]);
      
        $estado->update($request->all());
      
        return redirect()->route('estados.index')
                        ->with('success','estado actualizado satisfactoriamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(estado $estado)
    {
        $estado->delete();
       
        return redirect()->route('estados.index')
                        ->with('success','estado eliminado satisfactoriamente');
    }
}

