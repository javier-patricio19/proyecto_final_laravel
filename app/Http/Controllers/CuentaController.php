<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class CuentaController extends Controller
{
    //
    public function index()
    {
        return view('cuenta');
    }

    public function modificar(Request $request)
    {
        $update = new stdClass();

        if ($request->imagen != null) {
            $nombre_imagen = strtolower(trim($request->nombre, " ")) . "." . $request->file('imagen')->getClientOriginalExtension();
            $request->file('imagen')->storeAs('imagenes/paquetes', $nombre_imagen, 'public');
            $ruta_imagen = "storage/imagenes/paquetes/" . $nombre_imagen;
            $update->imagen = $ruta_imagen;
        } else {
            $ruta_imagen = Auth::user()->imagen;
            $update->imagen = $ruta_imagen;
        }

        if (
            $request->has('nombre') or
            $request->has('correo') or
            $request->imagen != null
        ) {
            if ($request->has('nombre')) {
                $update->name = strval($request->nombre);
            }
            if ($request->has('correo')) {
                $update->email = strval($request->correo);
            }

            User::where("id", Auth::user()->id)->update((array)$update);
        }

        return redirect()->route('modificarCuenta');
    }
}
