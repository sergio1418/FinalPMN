<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercadeController extends Controller
{
    return view('acercade', [
        'Apellido' => 'Apellidos',
        'Nombres' => 'Nombres',
        'Profesion' => 'Profesion',
        'level' => 'level',
        'diurno' => 'diurno',
    ]);

}
