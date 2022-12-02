<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\Request;

class RegistrarContratoController extends Controller
{
    public function registro(Request $request)
    {
        Contrato::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'municipio' => $request->municipio,
            'colonia' => $request->colonia,
            'fecha' => $request->fecha
        ]);
        return redirect()->route('mostrarContratar');
    }
}
