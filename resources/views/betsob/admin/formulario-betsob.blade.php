@extends('layouts.plantilla-betsob')
@section('section-principal-betsob')
	<div class="contenedor d-flex admin-1">

		<aside class="bg-dark col-2" >
			<h4  class="mt-2">AdminUrbine01</h4>
			<hr>
			<nav>
				<ul>
					<li><a href="{{ route('formulario-betsob') }}">Admin</a></li>
					<li><a href="#" onclick="alert('Aún no funciona.')">Crear Gorra</a></li>
					<li><a href="#" onclick="alert('Aún no funciona.')">Crear Cofia</a></li>
				</ul>
			</nav>
		</aside>

		<div class="container section-principal d-flex py-5">
	
			<form class="g-3 align-items-center my-3 ml-4 p-3 col-4" id="crear-gorra-form" action="{{ route('gorra.cargar_gorra') }}"  enctype="multipart/form-data" method="POST" style="background: #fff; box-shadow: 0px 0px 3px #000">
				@csrf
				<h2 style="text-align: center; font-family:sans-serif">Agregar una gorra</h2>
				<div class="col-12">
					<label class="visually-hidden" for="inlineFormInputGroupUsername">Talle del producto</label>
					<div class="d-flex">
						<div class="input-group">
							<input type="text" class="form-control" name="talle1" id="inlineFormInputGroupUsername" placeholder="Inserte Talle n°1" required>
						</div>
						<div class="input-group">
							<input type="text" class="form-control ml-1" name="talle2" id="inlineFormInputGroupUsername" placeholder="Inserte Talle n°2">
						</div>
					</div>
				</div>
				<div class="col-12">
					<label class="visually-hidden" for="inlineFormInputGroupUsername">Precio del producto</label>
					<div class="input-group">
						<input type="text" class="form-control" name="precio" id="inlineFormInputGroupUsername" placeholder="Inserte precio (2000 ejemplo)" required>
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
		
						<span>REVERSIBLE</span>
		
						<div class="form-check">
							<input class="form-check-input" type="radio" name="reversible" id="gridRadios1" value="1" checked>
							<label class="form-check-label" for="gridRadios1">
								Sí
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="reversible" id="gridRadios2" value="0">
							<label class="form-check-label" for="gridRadios2">
								No
							</label>
						</div>
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
				<table class="table table-striped table-dark  mt-3" style="width:650px">
					<thead>
	
						<th>ID</th>
						<th>Talle</th>
						<th>Precio</th>
						<th>ImgGorra</th>
						<th>Reversible</th>
						
					</thead>
					<tbody>
						@foreach($gorras as $item)
							<tr>
								<th>{{ $item->id}}</th>
								@if($item->talle2 > 0 )
									<td>Talle#{{ $item->talle1}}-{{ $item->talle2}}</td>
								@else
									<td>Talle#{{ $item->talle1}}</td>
								@endif
								<td>${{ $item->precio}}</td>
								<td><img src="{{ $item->gorra}}" alt="" width="50" height="50"></td>
								@if($item->reversible == true)
									<td>Reversible</td>
									@else 
									<td>No reversible</td>
								@endif
								<td>
									<a href="#" class="btn btn-dark "title="Ver más">
										<i class="fa-sharp fa-solid fa-eye"></i>
									</a>									
									<a href="{{ route('gorra.editar', $item->id) }}" class="btn btn-success "title="Editar">
										<i class="fa-solid fa-pen-to-square"></i>
									</a>
									<form action="{{ route('gorra.eliminar', $item->id) }}" class="d-inline" method="POST">
										@method('DELETE')
										@csrf
										<button type="submit" class="btn btn-danger "title="Eliminar">
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
</style>
