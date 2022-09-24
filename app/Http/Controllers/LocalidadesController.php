<?php

namespace App\Http\Controllers;
use App\Models\localidades;

use App\Http\Requests\StorelocalidadesRequest;
use App\Http\Requests\UpdatelocalidadesRequest;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class LocalidadesController extends Controller
{

    public function get($id = null)
    {
        if($id){
            $localidad = localidades::find($id);

            if ($localidad==null) {
                $mensaje="dato(s) no encontrados";
            }else{
                $mensaje="dato(s) encontrados";
            }
            return response()->json([
                'status' => '200',
                'data' => $localidad,
                'message' => $mensaje
            ],200);
        }
        else{
            $localidades = localidades::all();
            if ($localidades==null) {
                $mensaje="dato(s) no encontrados";
            }else{
                $mensaje="dato(s) encontrados";
            }
            return response()->json([
                'status' => '200',
                'data' => $localidades,
                'message' => $mensaje
            ],200);
        }

    }


    public function insert(Request $request)
    {
        if($request->validate([
            'tipo'=>'required|min:2|unique:localidades,tipo',

        ],
        [
            'tipo.required' => 'Por favor proporciona un tipo a la localidad',
            'tipo.unique' => 'Este tipo de localidad ya existe',

        ]
        ))
        {

            $localidad = localidades::create([
                'tipo' => $request->tipo

            ]);

            return response()->json([
                'status' => '201',
                'data' => $localidad,
                'message' => 'Se ha creado la localidad ' . $localidad
            ],201);

        }
        else {

            return response()->json([
                'status' => '400',
                'data' => [],
                'message' => 'Ha fallado la creación de la localidad'
            ],400);

        }

    }



    public function update(Request $request,$id)
    {
        if(true)
        {

            $localidades = localidades::findOrFail($id);
            $localidades->tipo = $request->tipo;

            if($localidades->save()){

                return response()->json([
                    'status' => '200',
                    'data' => $localidades,
                    'message' => ''
                ], 200);

            }
            else{

                return response()->json([
                    'status' => '400',
                    'data' => [],
                    'message' => 'No se actualizado la localidad'
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
            $localidades = localidades::find($id);
            if($localidades){

                if($localidades->delete()){

                    return response()->json([
                        'status' => '200',
                        'data' => [],
                        'message' => 'Se ha eliminado la localidad'
                    ], 200);

                }
                else{

                    return response()->json([
                        'status' => '400',
                        'data' => [],
                        'message' => 'No se ha podido eliminar la localidad'
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
            return response()->json(['localidadesUpdateComplete']);

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

