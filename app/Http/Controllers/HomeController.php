<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        // Todos los métodos de un controlador deberían devolver
        // siempre la respuesta, por ej: una vista.
        return view('welcome');
    }
}