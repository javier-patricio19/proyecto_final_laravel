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
            $request->file('imagen')->storeAs('paquetes', $request->file('imagen')->getClientOriginalExtension(), 'public');
        } else {
            $imagen = "/imagenes/default/paquete_default.jpg";
        }
        Paquete::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'tags' => $request->tags,
            'imagen' => $imagen
        ]);
        return redirect()->route('index');
    }

    public function eliminar($id)
    {
        $paquete = Paquete::find($id);
        $paquete->delete();

        $msg = "El paquete " . $paquete->nombre . " ha sido eliminado";
        return redirect()->route('index')->withSuccess($msg);
    }
}
