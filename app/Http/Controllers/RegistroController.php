<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index(Request $request){
        $nombre = $request->json("nombre");
        $archivo = $request->json("archivo");
        $registro = new Registro();

        $registro->nombre = $nombre;
        $registro->archivo = $archivo;
        if ($registro->save()) {
            return response()->json(["mensaje" => "registro creado correctamente", "ok" => true]);
        }

        return response()->json(["mensaje" => "registro creado incorrectamente", "ok" => false]);
    }
}
