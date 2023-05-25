<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class betsob extends Controller
{

    public function gorras(){

    	$title = 'Betsob - Gorras para Soldadores';
    	return view('betsob.gorras-betsob', compact('title'));
    }    
    public function cofias(){
    	$title = 'Betsob - Cofias para Soldadores';
    	return view('betsob.cofias-betsob',compact('title'));
    }
	public function formulario(){
    	$title = 'Betsob - Crud';
    	return view('betsob.formulario-betsob',compact('title'));
    }

    // Crear gorra
   	public function crear_gorra(Request $request){

		$gorraNueva = new App\Gorra;
		$gorraNueva->img_gorra = $request->imagen_gorra;
		$gorraNueva->nombre = $request->nombre_gorra;
		$gorraNueva->talle = $request->talle_gorra;
        $gorraNueva->creador = $request->creador_gorra;
        $gorraNueva->creador = $request->url_gorra;
		$gorraNueva->precio = $request->precio;

        $gorraNueva->save();
        return back()->with('mensaje', 'Gorra agregada');

   	}
}
