@extends('layouts.plantilla-betsob')
@section('section-principal-betsob')

	<x-header-betsob-admin/>
	<div class="contenedor d-flex admin-1">

		<div class="container section-principal d-flex py-5 justify-content-center">
	
			<form class="g-3 align-items-center my-3 mr-3 p-3 col-4" id="crear-gorra-form" action="{{ route('gorra.cargar_gorra') }}"  enctype="multipart/form-data" method="POST" style="background: #fff; box-shadow: 0px 0px 3px #000">
				@csrf
				<h2 style="text-align: center; font-family:sans-serif">Agregar una gorra</h2>
				<div class="col-12">
					<label class="visually-hidden" for="inlineFormInputGroupUsername">Talle del producto</label>
					<div class="d-flex">
						<div class="input-group">
							<input type="number" class="form-control" name="talle1" id="inlineFormInputGroupUsername" placeholder="Inserte Talle n°1" required>
						</div>
						<div class="input-group">
							<input type="number" class="form-control ml-1" name="talle2" id="inlineFormInputGroupUsername" placeholder="Inserte Talle n°2">
						</div>
					</div>
				</div>
				<div class="col-12">
					<label class="visually-hidden" for="inlineFormInputGroupUsername">Precio del producto</label>
					<div class="input-group">
						<input type="number" class="form-control" name="precio" id="inlineFormInputGroupUsername" placeholder="Inserte precio (2000 ejemplo)" required>
					</div>
				</div>
				<div class="col-12 mt-2" style="display: flex; justify-content: space-between; align-items:center;">
					<label for="formFileMultiple" class="form-label">Cargar imagen</label>

					<label class="custom-file-upload">
						<input type="file" class="btn btn-secondary" name="gorra" onchange="previewImage(event, '#imgPreview')" required>
						Subir archivo
					</label>
					
				</div>
				<div class="d-flex mt-2 col-12" style="justify-content: between">

					<div class="col-sm-6">
		
						<select name="reversible" id="">
							<option value="1"selected>Reversible</option>
							<option value="0">No reversible</option>

						</select>
						<select name="autor" id="" class="my-1 ">
							<option value="default" selected hidden>Autor</option>
							<option value="Mariana">Mariana</option>
							<option value="Gabriela">Gabriela</option>
							<option value="Bety">Bety</option>
							<option value="Otro">Otro</option>

						</select><br>


						<input type="number" name="cantidad" class=" form-control col-8 px-1 d-inline" placeholder="cantidad">
						<div class="mt-3">
						  <input type="submit" value="Cargar" class="btn btn-primary">
						</div>
					</div>
					
					<div class="container-fluid d-flex justify-content-center" style="height: 130px; width:130px: display:flex; justify-content: center; box-shadow: 0px 0px 1px #000; background:#fff">
						<a href="#" type="button" >
							
							<img id="imgPreview" style="height: 100%; width:100%;">
						</a>
					</div>


				</div>
			</form>

			<div class="div">
				<table class="table table-striped table-dark  mt-3 ml-3" >
					<thead>
	
						<th>Talle</th>
						<th>Precio</th>
						<th>Img</th>
						<th>Reversible</th>
						<th>Cant</th>
						
					</thead>
					<tbody>
						@foreach($gorras as $item)
							<tr>
								@if($item->talle2 > 0 )
									<td>{{ $item->talle1}}-{{ $item->talle2}}</td>
								@else
									<td>{{ $item->talle1}}</td>
								@endif
								<td>${{ $item->precio}}</td>
								<td><img src="{{ $item->gorra}}" alt="" width="50" height="50"></td>
								@if($item->reversible == true)
									<td>Reversible</td>
									@else 
									<td>No reversible</td>
								@endif
								<td>{{$item->cantidad}}</td>
								<td>
									<a href="#" class="btn btn-secondary"title="Ver más">
										<i class="fa-sharp fa-solid fa-eye"></i>
									</a>									
									<a href="{{ route('gorra.editar', $item->id) }}" class="btn btn-success"  title="Editar">
										
										<i class="fa-solid fa-pen-to-square"></i>
									</a>
									<form action="{{ route('gorra.eliminar', $item->id) }}" class="d-inline" method="POST">
										@method('DELETE')
										@csrf

										<button type="submit" class="btn btn-danger"title="Eliminar">
											
											<i class="fa-solid fa-trash"></i>
										</button>
									</form>
								</td>
								
							</tr>
						@endforeach()
	
					</tbody>
				</table>
				@if (session('mensaje'))

					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Atención!</strong> {{ session('mensaje') }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				@endif
				<div class="d-flex justify-content-center" >
					{{ $gorras->links() }}
				</div>

			</div>
	
			
		</div>
	</div>


@endsection
<script>

	function previewImage(event, querySelector){

		//Recuperamos el input que desencadeno la acción
		const input = event.target;

		//Recuperamos la etiqueta img donde cargaremos la imagen
		$imgPreview = document.querySelector(querySelector);

		// Verificamos si existe una imagen seleccionada
		if(!input.files.length) return

		//Recuperamos el archivo subido
		file = input.files[0];

		//Creamos la url
		objectURL = URL.createObjectURL(file);

		//Modificamos el atributo src de la etiqueta img
		$imgPreview.src = objectURL;
				
	}
</script>

<style>
	svg{
		height: auto;
	}
	input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button { 
	-webkit-appearance: none; 
	margin: 0; 
	}

</style>
