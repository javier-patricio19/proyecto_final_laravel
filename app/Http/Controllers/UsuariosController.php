<?php

namespace App\Http\Controllers;

use App\Models\TiposDeUsuario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        $usuario_actual = User::find(Auth::user()->id);
        $tipos_de_usuario = TiposDeUsuario::all();
        return view('usuarios', [
            'usuarios' => $usuarios,
            'tipos_usuarios' => $tipos_de_usuario,
            'usuario_actual' => $usuario_actual
        ]);
    }
}
