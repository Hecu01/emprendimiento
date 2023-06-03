<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Betsob_gorra;
use App\Models\Betsob_cofia;
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
    public function tabla_gorras(){
		
		$gorras = Betsob_gorra::paginate(4);
    	$title = 'Betsob - Tabla de gorras';
    	return view('betsob.admin.tabla-gorras',compact('title', 'gorras'));

	}

	// Admin

	// Gorras
	public function formulario_gorra(){
		$gorras = Betsob_gorra::paginate(4);
    	$title = 'Betsob - Gorras';
    	return view('betsob.admin.gorras-crear',compact('title', 'gorras'));
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
        $gorraNueva->talle1 = $request->talle1;
        $gorraNueva->talle2 = $request->talle2;
        $gorraNueva->precio = $request->precio;
        $gorraNueva->reversible = $request->reversible;
        $gorraNueva->autor = $request->autor;
        $gorraNueva->cantidad = $request->cantidad;
        $gorraNueva->save();
        return back();
   	}

	// editar
	public function editar ($id){
		$gorras = Betsob_gorra::findOrFail($id);
		
		$fecha = Betsob_gorra::select('updated_at');
    	return view('betsob.admin.admin-gorras.gorras_editar',compact('gorras', 'fecha'));

	}
	public function update(Request $request, $id){
		$gorrasUpdate = Betsob_gorra::findOrFail($id);
		$gorrasUpdate-> talle1 = $request->talle1;
		$gorrasUpdate-> talle2 = $request->talle2;
		$gorrasUpdate-> precio = $request->precio;
		$gorrasUpdate-> reversible = $request->reversible;
		$gorrasUpdate-> autor = $request->autor;
		$gorrasUpdate-> cantidad = $request->cantidad;
		$gorrasUpdate->save();
		return back()->with('mensaje', 'Gorra actualizada');
	}

	// Eliminar
	public function eliminar($id){
		$gorraEliminar = Betsob_gorra::findOrFail($id);
		$gorraEliminar->delete();
		return back()->with('mensaje', 'Gorra Eliminada');
	}	
	public function una_gorra_mas(Request $request, $id){
		$sumar_gorra = 1;
		$gorrasUpdate = Betsob_gorra::findOrFail($id);
		$gorrasUpdate-> cantidad =+ $request->sumar_gorra;
		$gorrasUpdate->save();
		return back()->with('mensaje', 'Gorra agregada');
	}

	// Gorras
	public function formulario_cofia(){
		// $cofias = Betsob_cofia::paginate(4);
		$title = 'Betsob - Cofias';
		return view('betsob.admin.cofias-crear',compact('title'));
	}
	
	
	// Crear cofia
	public function store_cofia(Request $request){

		$cofiaNueva = new Betsob_cofia;
		if($request->hasFile('cofia')){
			$file = $request->file('cofia');
			$carpetaDestino = 'img/betsob/cofias/';
			$filename = time() . '-' . $file->getClientOriginalName();
			$uploadSuccess = $request->file('cofia')->move($carpetaDestino, $filename);
			$cofiaNueva->cofia = $carpetaDestino . $filename;
		}
		$cofiaNueva->talle1 = $request->talle1;
		$cofiaNueva->talle2 = $request->talle2;
		$cofiaNueva->precio = $request->precio;
		$cofiaNueva->reversible = $request->reversible;
		$cofiaNueva->autor = $request->autor;
		$cofiaNueva->cantidad = $request->cantidad;
		$cofiaNueva->save();
		return back();
	}
}
