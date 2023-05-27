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
			<x-header/>

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
								<li><a href="#" onclick="alert('Aún no funciona.')">Tabla de las Gorras</a></li>
								<li><a href="#" onclick="alert('Aún no funciona.')">Tabla de las Cofias</a></li>
							</ul>
						</nav>
					</aside>
			
					<div class="container section-principal d-flex" style="justify-content: space-between">
				
						<h1>Editar Gorra: {{ $gorras->id }}</h1>
						<form class="g-3 align-items-center my-3 ml-4 p-3 col-4" id="crear-gorra-form" action="{{ route('gorra.cargar_gorra') }}"  enctype="multipart/form-data" method="POST">
							@csrf
							<h2 style="text-align: center; font-family:sans-serif">Agregar una gorra</h2>
							<div class="col-12">
								<label class="visually-hidden" for="inlineFormInputGroupUsername">Talle</label>
								<div class="input-group">
									<input type="text" class="form-control" name="talle" id="inlineFormInputGroupUsername" placeholder="Inserte talle (34, 35, 36, 37)">
								</div>
							</div>
							<div class="col-12">
								<label class="visually-hidden" for="inlineFormInputGroupUsername">Precio</label>
								<div class="input-group">
									<input type="text" class="form-control" name="precio" id="inlineFormInputGroupUsername" placeholder="Inserte precio (2000 example)">
								</div>
							</div>
							<div class="col-12 mt-2" style="display: flex; justify-content: space-between; align-items:center;">
								<label for="formFileMultiple" class="form-label">Cargar imagen</label>
			
								<label class="custom-file-upload">
									<input type="file" class="btn btn-secondary" name="gorra" onchange="previewImage(event, '#imgPreview')" >
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
						
						talle
						precio
						gorra
						reversible
				
						
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