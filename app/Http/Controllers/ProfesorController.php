<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function create(Request $request){
        $profesor = new Profesor();

        $profesor->nombre_profesor = $request->nombre;
        $profesor->email_profesor = $request->email;
        $profesor->contraseña_profesor = $request->contraseña;
        $profesor->save();
    }
}
