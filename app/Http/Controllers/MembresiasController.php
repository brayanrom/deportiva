<?php

namespace App\Http\Controllers;
use App\Models\membresias;

use App\Http\Requests\StoreactividadesRequest;
use App\Http\Requests\UpdateactividadesRequest;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class MembresiasController extends Controller
{

    public function get($id = null)
    {
        if($id){
            $membresia = membresias::find($id);

            if ($membresia==null) {
                $mensaje="dato(s) no encontrados";
            }else{
                $mensaje="dato(s) encontrados";
            }
            return response()->json([
                'status' => '200',
                'data' => $membresia,
                'message' => $mensaje
            ],200);
        }
        else{
            $membresias = membresias::all();
            if ($membresias==null) {
                $mensaje="dato(s) no encontrados";
            }else{
                $mensaje="dato(s) encontrados";
            }
            return response()->json([
                'status' => '200',
                'data' => $membresias,
                'message' => $mensaje
            ],200);
        }

    }


    public function insert(Request $request)
    {
        if($request->validate([
            'tipo'=>'required|min:2|unique:membresias,tipo',

        ],
        [
            'tipo.required' => 'Por favor proporciona un tipo a la membresia',
            'tipo.unique' => 'Este tipo de membresia ya existe',

        ]
        ))
        {

            $membresia = membresias::create([
                'tipo' => $request->tipo

            ]);

            return response()->json([
                'status' => '201',
                'data' => $membresia,
                'message' => 'Se ha creado la membresia ' . $membresia
            ],201);

        }
        else {

            return response()->json([
                'status' => '400',
                'data' => [],
                'message' => 'Ha fallado la creación de la membresia'
            ],400);

        }

    }



    public function update(Request $request,$id)
    {
        if(true)
        {

            $membresias = membresias::findOrFail($id);
            $membresias->tipo = $request->tipo;

            if($membresias->save()){

                return response()->json([
                    'status' => '200',
                    'data' => $membresias,
                    'message' => ''
                ], 200);

            }
            else{

                return response()->json([
                    'status' => '400',
                    'data' => [],
                    'message' => 'No se actualizado la membresia'
                ], 400);

            }

        }
        else{

            return response()->json([
                'status' => '400',
                'data' => [],
                'message' => 'Ha fallado la petición'
            ], 400);

        }

    }




    public function delete($id)
    {
        if($id){
            $membresias = membresias::find($id);
            if($membresias){

                if($membresias->delete()){

                    return response()->json([
                        'status' => '200',
                        'data' => [],
                        'message' => 'Se ha eliminado la membresia'
                    ], 200);

                }
                else{

                    return response()->json([
                        'status' => '400',
                        'data' => [],
                        'message' => 'No se ha podido eliminar la membresia'
                    ], 400);

                }

            }
            else{

                return response()->json([
                    'status' => '404',
                    'data' => [],
                    'message' => 'No se encontro el recurso solicitado'
                ], 404);

            }
            return response()->json(['membresiasUpdateComplete']);

        }
        else{

            return response()->json([
                'status' => '400',
                'data' => [],
                'message' => 'Faltan parametros por enviar'
            ], 400);

        }

    }


}

