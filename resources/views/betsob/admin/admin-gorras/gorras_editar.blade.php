<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="gorras, cofias, soldadores, gorras para soldadores, cofias para soldadores, gorra para soldador, cofia para soldador, barbijos, betsob, Betsob, BETSOB.">
		<meta name="author" content="Valentín Urbine">
		<meta name="description" content="Bienvenido al sitio de Ana Beatriz Soberano, donde podrá encontrar gorras, cofias, barbijos, etc. Somos de San Nicolás de los Arroyos, Buenos Aires, Argentina.">
		<meta name="copyright" content="">
		<link rel="shortcut icon" href="img/betsob/header arg.png" id="fileico">

		<link rel="icon" href="favicon.ico" sizes="32x32" type="image/png">
		
		<!-- JS connect -->
		<script src="javascript/scrollreveal.js"></script>

		<!-- Bootstrap Injected -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<!-- CSS connect -->
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/betsob/cofia.css">
		<link rel="stylesheet" href="../css/betsob/gorra.css">
		<link rel="stylesheet" href="../css/betsob/styles.css">
		<link rel="stylesheet" href="../css/betsob/formularios.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<title>{{ isset($title) ? $title : 'Sitio Web'}}</title>
	</head>

	<body>

		
		<main class="contenedor">
			<!-- Header Portafolio Urbine01 -->
			{{-- <x-header/> --}}

			<!-- Header Betsob -->
			<x-header-betsob/>
			
			<!-- Seccion Principal -->
			<div class="principal">
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
			
					<div class="container section-principal d-flex" 
					style="justify-content: space-between; background: url('../img/betsob/fondo_admin.jpg') no-repeat center/cover">
			
						<form method="POST" action="{{ route('gorra.actualizar', $gorras->id) }}" class="my-3" style="background: #fff;box-shadow: 0px 0px 3px #000;border: 1px solid rgb(0,0,0, 0.2); width: 410px;">
							<h1 style="text-align: center">Editar Gorra: {{ $gorras->id }}</h1>
							
							@method("PUT")
							@csrf
							
							<div class="container-fluid d-flex justify-content-center" style="height: 250px; width:250px: display:flex; justify-content: center; box-shadow: 0px 0px 1px #000; background:#000">
								<img src="../{{ $gorras->gorra }}" style=" ">
							</div>
							<div class="row p-3" style="align-items: center; justify-content: space-between">
								<div class="left ml-4 col-7">
									<div class="d-flex" >
										<div>
											<label for="">Talle: 1</label><br>
											<input type="number" class="form-control" name="talle1" value="{{ $gorras->talle1 }}">
										</div>
										
										<div class="ml-1">
											<label for="">Talle: 2</label><br>
											<input type="number" class="form-control" name="talle2" value="{{ $gorras->talle2 }}">
										</div>
									</div>
									
									<label for="">Precio</label><br>
									<input type="number" class="form-control" name="precio" value="{{ $gorras->precio }}">

									<div class="mt-3">
										@if ($gorras->reversible == true)
											<select name="reversible" id="">
												<option value="1" selected>Reversible (Asignado)</option>
												<option value="0">No Reversible</option>
											</select>
										@else
											<select name="reversible" id="">
												
												<option value="1" >Reversible</option>
												<option value="0" selected>No Reversible (Asignado)</option>
											</select>
										@endif
									</div>
			
								</div>
								<div class="mr-4">
									<div style="display:grid;">
										<button type="submit" class="btn btn-success mb-1">Guardar</button>
										<a href="{{ url()->previous() }}" class="btn btn-secondary">Regresar</a>
									</div>
								</div>
							</div>
			
						</form>
			
						<div class="div">
							
							<table class="table table-striped table-dark  mt-3" style="width:650px; box-shadow: 0px 0px 3px #000;">
								<thead>
			
									<th>ID</th>
									<th>Talle</th>
									<th>Precio</th>
									<th>ImgGorra</th>
									<th>Reversible</th>
									<th>Actualizado</th>
									
								</thead>
								<tbody>
									<tr>
										<th>{{ $gorras->id}}</th>
										@if($gorras->talle2 > 0 )
											<td>Talle#{{ $gorras->talle1}}-{{ $gorras->talle2}}</td>
										@else
											<td>Talle#{{ $gorras->talle1}}</td>
										@endif
										<td>${{ $gorras->precio}}</td>
										<td><img src="../{{ $gorras->gorra}}" alt="" width="50" height="50"></td>
										@if($gorras->reversible == true)
											<td>Reversible</td>
											@else 
											<td>No reversible</td>
										@endif
										<td>{{ $gorras->updated_at}}</td>
										
									</tr>
									
								</tbody>
							</table>
							@if (session('mensaje'))

								<div class="alert alert-success alert-dismissible fade show" role="alert">
									<strong>Enhorabuena!</strong> {{ session('mensaje') }}<br>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							@endif

						</div>
			
						
					</div>
				</div>
			</div>


			<!-- Footer -->
			<x-footer-betsob/>
			<p class="pie_de_pagina pl-2  " >{{ isset($footer) ? $footer : ''}}</p>
		</main>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		<script src="javascript/main.js"></script>
	</body>
</html>



	
