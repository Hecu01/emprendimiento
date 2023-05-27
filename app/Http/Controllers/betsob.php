<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Betsob_gorra;
use App;

class betsob extends Controller
{
	// Navegacion

    public function gorras(){
		$gorras = Betsob_gorra::all();
    	$title = 'Betsob - Gorras para Soldadores';
    	return view('betsob.gorras-betsob', compact('title', 'gorras'));
    }    
    public function cofias(){
    	$title = 'Betsob - Cofias para Soldadores';
    	return view('betsob.cofias-betsob',compact('title'));
    }

	// Admin
	public function formulario(){
		$gorras = Betsob_gorra::paginate(4);
		
    	$title = 'Betsob - Crud';
    	return view('betsob.admin.formulario-betsob',compact('title', 'gorras'));
    }

    // Crear gorra
   	public function store(Request $request){

		$gorraNueva = new Betsob_gorra;
		if($request->hasFile('gorra')){
			$file = $request->file('gorra');
			$carpetaDestino = 'img/betsob/gorras/';
			$filename = time() . '-' . $file->getClientOriginalName();
			$uploadSuccess = $request->file('gorra')->move($carpetaDestino, $filename);
			$gorraNueva->gorra = $carpetaDestino . $filename;
		}
        $gorraNueva->talle = $request->talle;
        $gorraNueva->precio = $request->precio;
        $gorraNueva->reversible = $request->reversible;
        $gorraNueva->save();
        return back();
   	}

	// editar
	public function editar ($id){
		$gorras = Betsob_gorra::find($id);
    	return view('betsob.admin.admin-gorras.editar',compact('gorras'));

	}


}
