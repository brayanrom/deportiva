<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_pago as TipoPago;
class TipoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipospagos = TipoPago::all();
        // ->paginate(5);
      
        return view('tipospagos.index',compact('tipospagos'));
        
            // ->with('i', (request()->input('page', 1) - 1) * 5);

        }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipospagos.create');
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
            'costo' => 'required'
        ]);
      
        TipoPago::create($request->all());
       
        return redirect()->route('tipospagos.index')
        ->with('success','TipoPago registrada satisfactoriamente.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoPago  $tipospago
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPago $tipospago)
    {
        return view('tipospagos.show',compact('tipospago'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoPago  $tipospago
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoPago $tipospago)
    {
        return view('tipospagos.edit',compact('tipospago'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoPago  $tipospago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPago $tipospago)
    {
        $request->validate([
            'nombre' => 'required',
            'costo' => 'required'
        ]);
      
        $tipospago->update($request->all());
      
        return redirect()->route('tipospagos.index')
        ->with('success','TipoPago Actualizada satisfactoriamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoPago  $tipospago
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoPago $tipospago)
    {
        $tipospago->delete();
       
        return redirect()->route('tipospagos.index')
        ->with('success','TipoPago Eliminada satisfactoriamente.');
    }
}