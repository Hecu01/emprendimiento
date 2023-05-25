<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class myController extends Controller
{
    // Bienvenida
    public function welcome(){
    	$title = 'Sitio Web - Bienvenida';
    	return view('welcome', compact('title'));
    }
    // Sitio web de mi abuelita
    public function betsob(){
    	$title = 'Betsob - Sitio Web';
        $footer = 'San Nicolás de los Arroyos, Buenos Aires.';
    	return view('betsob.home-betsob', compact('title', 'footer'));
    }
    // Sitio web de mi suegro
    public function perfectec(){
    	$title = 'Sitio Web - Perfectec';
    	return view('perfectec.home-perfectec', compact('title'));
    }
    // Sitio web de mi Tia
    public function vyc(){
    	$title = 'Sitio Web - V&C';
    	return view('vyc-nails', compact('title'));
    }

    // Sitio web propio
    public function myblog(){
    	$title = 'Urbine01';
    	return view('blog.blog', compact('title'));
    }
       
    public function myblog_crear(Request $request){
        $consultaNueva = new App\Models\Consulta;
        $consultaNueva->nombre = $request->nombre;
        $consultaNueva->apellido = $request->apellido;
        $consultaNueva->correo = $request->correo;
        $consultaNueva->mensaje = $request->mensaje;

        $consultaNueva->save();
        return back()->with('mensaje', 'Consulta Enviada!');
    }
    public function myblog_consultas(){
        $consultas = App\Models\Consulta::all();
    	$title = 'Urbine01 - Consultas';
    	return view('blog.consultas', compact('title', 'consultas'));
    }
}
