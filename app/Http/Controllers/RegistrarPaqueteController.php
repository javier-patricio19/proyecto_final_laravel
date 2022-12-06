<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegistrarPaqueteController extends Controller
{
    public function index()
    {
        return view('registrar-paquete');
    }
    public function registro(Request $request)
    {
        if ($request->imagen != null) {
            $nombre_imagen = strtolower(trim($request->nombre, " ")) . "." . $request->file('imagen')->getClientOriginalExtension();
            $request->file('imagen')->storeAs('imagenes/paquetes', $nombre_imagen, 'public');
            $ruta_imagen = "storage/imagenes/paquetes/" . $nombre_imagen;
        } else {
            $ruta_imagen = "/imagenes/default/paquete_default.jpg";
        }
        Paquete::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'tags' => $request->tags,
            'imagen' => $ruta_imagen
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
