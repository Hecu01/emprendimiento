@extends('betsob.plantilla-betsob')
@section('section-principal-betsob')
    <!-- Section -->
    <div class="gorras-betsob">
    	<x-header-betsob/>
    </div>
	<section class="">
		<h1>Gorras para soldadores</h1>
		<div class="center d-flex">
			
			<form 
			action="" 
			style="width: 350px; margin: 30px; background: rgb(0,135,135); padding: 20px" class="form"
			action="{{ route('gorras.crear')}}" 
			>
				@csrf
				<h4>Crear publicacion</h4>
				<input type="file" name="img_gorra" id=""><br><br>
				<input type="text" class="form-control" name="nombre_gorra" placeholder="Nombre (ej: Gorra N°1)"><br>
				<input type="text" class="form-control" name="talle_gorra" placeholder="Talle"> <br>
				<input type="text" class="form-control" name="gorra_creador" placeholder="¿Quién la hizo?"><br>
				<input type="text" class="form-control" name="precio" placeholder="Precio">
				<div class="d-flex justify-content-center mt-4">
					<button class="btn btn-success">Agregar</button>
				</div>
			</form>
			@if ( session('mensaje') )
			    <div class="alert alert-success">{{ session('mensaje') }}</div>
			@endif	
			<br><br>

			<div class="articulos">
				<article class="" style="background: rgb(0,0,0,0.3);">
					<img src="img/betsob/gorras/articulo1.jpg" alt="Gorra" width="250" height="250">
					<h4>Gorra #123</h4>
					<div class="detalles" style="padding: 5px;">
						<p>Talle: </p>
						<p>Creación: </p>
						<p>Precio: </p>
						
					</div>

				</article>
			</div>
		</div>

	</section>
@endsection