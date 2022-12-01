<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function mostrarIndex()
    {
        return view('Index');
    }
    public function mostrarContacto()
    {
        return view('contacto');
    }
    public function mostrarAcerca()
    {
        return view('Acerca');
    }
    public function mostrarContratar()
    {
        return view('Contratar');
    }
    public function mostrarLogin()
    {
        return view('Login');
    }
}
