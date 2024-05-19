<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function eventos()
    {
        $eventos = Evento::all();
        return view('eventos', ['eventos' => $eventos]);
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function handleContact(Request $request)
    {
        //guardar informacion en la base de datos
        $evento = new Evento;
        $evento->Nombre = $request->input('name');
        $evento->Ubicacion = $request->input('location');
        $evento->Fecha = $request->input('date');
        $evento->Hora = $request->input('time');
        $evento->save();

        return redirect('/eventos');

    }
}
