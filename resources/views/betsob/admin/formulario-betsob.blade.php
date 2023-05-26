@extends('layouts.plantilla-betsob')
@section('section-principal-betsob')
	<div class="contenedor d-flex admin-1">

		<aside class="bg-dark" >
			<h4  class="mt-2">Navegación</h4>
			<nav>
				<ul>
					<li><a href="#" onclick="alert('Aún no funciona.')">Admin</a></li>
					<li><a href="#" onclick="alert('Aún no funciona.')">Crear Gorra</a></li>
					<li><a href="#" onclick="alert('Aún no funciona.')">Crear Cofia</a></li>
					<li><a href="#" onclick="alert('Aún no funciona.')">Tabla de las Gorras</a></li>
					<li><a href="#" onclick="alert('Aún no funciona.')">Tabla de las Cofias</a></li>
				</ul>
			</nav>
		</aside>
		<div class="container section-principal">
	
			<form class="g-3 align-items-center my-3 p-3" style="width:340px; border: 1px solid rgb(0,0,0,0.2)" enctype="multipart/form-data">
				<h2 style="text-align: center; font-family:sans-serif">Agregar una gorra</h2>
				<div class="col-12">
					<label class="visually-hidden" for="inlineFormInputGroupUsername">Talle</label>
					<div class="input-group">
						<input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Inserte talle (34, 35, 36, 37)">
					</div>
				</div>
				<div class="col-12">
					<label class="visually-hidden" for="inlineFormInputGroupUsername">Precio</label>
					<div class="input-group">
						<input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Inserte precio (2000 example)">
					</div>
				</div>
				<div class="col-12 mt-2" style="display: flex; justify-content: space-between; align-items:center;">
					<label for="formFileMultiple" class="form-label">Cargar imagen</label>

					<label class="custom-file-upload">
						<input type="file" class="btn btn-secondary"  onchange="previewImage(event, '#imgPreview')" >
						Subir archivo
					</label>
					
				</div>
				<div class="d-flex mt-2 col-12" style="justify-content: between">

					<div class="col-sm-6">
		
						<span>REVERSIBLE</span>
		
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
							<label class="form-check-label" for="gridRadios1">
								Sí
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
							<label class="form-check-label" for="gridRadios2">
								No
							</label>
						</div>
						<div class="mt-3">
						  <button type="submit" class="btn btn-primary">Cargar</button>
						</div>
					</div>
		
					<a href="#" type="button" >
						
						<img id="imgPreview" width="130" height="130" style="box-shadow: 0px 0px 3px #000; background:#63636363">
					</a>


				</div>
			</form>
	
			
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


