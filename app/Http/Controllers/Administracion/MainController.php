<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class MainController extends Controller
{
    public function index()
    {
        return view('administracion.index');
    }

    public function ajaxRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo'    => 'required|max:255',
            'contenido' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'error' => true,
                'message' => 'Es necesario escribir un título y contenido'
            ];
        }else{
            $titulo = $request->get('titulo');
            $contenido = $request->get('contenido');

            $response = [
                'error' => false,
                'message' => 'Datos guardados correctamente'
            ];
        }

        return response()->json($response);
    }
}
