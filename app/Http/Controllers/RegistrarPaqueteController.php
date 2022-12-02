<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;

class RegistrarPaqueteController extends Controller
{
    public function index()
    {
        return view('registrar-paquete');
    }
    public function registro(Request $request)
    {
        if ($request->imagen != null) {
            $imagen = $request->imagen;
        } else {
            $imagen = "/imagenes/default/paquete_default.jpg";
        }
        Paquete::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'tags' => $request->tags,
            'imagen' => $imagen
        ]);
    }
}
