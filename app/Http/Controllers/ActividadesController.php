<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use App\Http\Requests\StoreactividadesRequest;
use App\Http\Requests\UpdateactividadesRequest;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;


class ActividadesController extends Controller
{

    public function get($id = null)
    {
        if($id){
            $actividad = actividades::find($id);

            if ($actividad==null) {
                $mensaje="dato(s) no encontrados";
            }else{
                $mensaje="dato(s) encontrados";
            }
            return response()->json([
                'status' => '200',
                'data' => $actividad,
                'message' => $mensaje
            ],200);
        }
        else{
            $actividades = actividades::all();
            if ($actividades==null) {
                $mensaje="dato(s) no encontrados";
            }else{
                $mensaje="dato(s) encontrados";
            }
            return response()->json([
                'status' => '200',
                'data' => $actividades,
                'message' => $mensaje
            ],200);
        }

    }


    public function insert(Request $request)
    {
        if($request->validate([
            'nombre'=>'required|min:2|unique:actividades,nombre',
            'descripcion'=>'required|min:2|unique:actividades,descripcion'

        ],
        [
            'nombre.required' => 'Por favor proporciona un nombre a la actividad',
            'nombre.unique' => 'Este nombre de actividad ya existe',

            'descripcion.required' => 'Por favor proporciona una descripcion a la actividad',
            'descripcion.unique' => 'Esta descripcion de actividad ya existe',

        ]
        ))
        {

            $actividad = actividades::create([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,

            ]);

            return response()->json([
                'status' => '201',
                'data' => $actividad,
                'message' => 'Se ha creado la actividad ' . $actividad
            ],201);

        }
        else {

            return response()->json([
                'status' => '400',
                'data' => [],
                'message' => 'Ha fallado la creación de la actividad'
            ],400);

        }

    }



    public function update(Request $request,$id)
    {
        $actividades = actividades::findOrFail($id);

        if($actividades!=null || $actividades=='')
        {
            $actividades->nombre = $request->nombre;
            $actividades->descripcion = $request->descripcion;

            if($actividades->save()){

                return response()->json([
                    'status' => '200',
                    'data' => $actividades,
                    'message' => ''
                ], 200);

            }
            else{

                return response()->json([
                    'status' => '400',
                    'data' => [],
                    'message' => 'No se actualizado la actividad'
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
            $actividades = actividades::find($id);
            if($actividades){

                if($actividades->delete()){

                    return response()->json([
                        'status' => '200',
                        'data' => [],
                        'message' => 'Se ha eliminado la actividad'
                    ], 200);

                }
                else{

                    return response()->json([
                        'status' => '400',
                        'data' => [],
                        'message' => 'No se ha podido eliminar la actividad'
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
            return response()->json(['actividadesUpdateComplete']);

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

