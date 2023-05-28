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
			<header class="header1" >
				<!-- Nav -->
				<a href="{{ route('betsob') }}" class="betsob">
					Betsob
				</a>
				{{-- <div style="margin-top: 13px">
					<form action="" method="get" class="d-flex ">
						<input type="search" name="" placeholder="Talle, gorra, cofia." class="mr-1" style="height: 29.5px">
						<button class="btn btn-sm btn-success">Buscar</button>
					</form>
				</div> --}}
				<nav class="social_media" id="nav-betsob">	
			
					<ul id="navegar">
						<li class="menu__item"><a href="{{ route('betsob') }}"  class="menu__link">Inicio</a></li>
						<li><a href="{{ route('cofias') }}">Cofias</a></li>
						<li class="menu__item"><a href="{{ route('gorras') }}" class="menu__link">Gorras</a></li>
						{{-- <li class="menu__item"><a href="#" class="menu__link">Encargar</a></li> --}}
						<li class="menu__item"><a href="{{ route('formulario-betsob') }}" class="menu__link">Crud</a></li>
					</ul>	
			
					<ul id="redes_sociales">
						<li><a href="https://www.facebook.com/Gorras-para-Soldadores-BetSob-San-Nicol%C3%A1s-Buenos-Aires-Argentina-1556529141285253" target="_BLANK"><i class="fab fa-facebook"></i></a></li>
						<li><a href="#" target="_BLANK"><i class="fab fa-whatsapp"></i></a></li>
						<li><a href="#" target="_BLANK"><i class="fab fa-instagram"></i></a></li>
						
					</ul>
			
					<a href="#" style="margin-top: -13px;">
						
						<img src="../img/betsob/header arg.png" alt="argentina">
					</a>			
				</nav>
			</header>
			
			
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
			
					<div class="container section-principal d-flex" 
					style="justify-content: space-between; background: url('../img/betsob/fondo_admin.jpg') no-repeat center/cover">
				
						<form action="" class="my-3" style="background: #fff;border: 2px solid rgb(0,0,0, 0.2); width: 410px;">
							<h1 style="text-align: center">Editar Gorra: {{ $gorras->id }}</h1>
							<div class="container-fluid d-flex justify-content-center" style="height: 250px; width:250px: display:flex; justify-content: center; box-shadow: 0px 0px 1px #000; background:#000">

									
								<img src="../{{ $gorras->gorra }}" style=" ">


							</div>
							<div class="row p-3" style="align-items: center; justify-content: space-between">
								<div class="left ml-4">
									<label for="">Talle</label><br>
									<input type="text"value="{{ $gorras->talle }}"><br>
									<label for="">Precio</label><br>
									<input type="text"value="{{ $gorras->precio }}"><br>
									<label for="">Reversible</label><br>

									@if ($gorras->reversible == true)
										<select name="" id="">
											<option value="1" selected>Sí (Asignado)</option>
											<option value="0">No</option>
										</select>
									@else
										<select name="" id="">
											
											<option value="1" >Sí</option>
											<option value="0" selected>No (Asignado)</option>
										</select>
									@endif

								</div>
								<div class="mr-4">
									<div style="display:grid;">
										<a href="#" class="btn btn-success mb-1">Guardar</a>
										<a href="{{ url()->previous() }}" class="btn btn-secondary">Regresar</a>
									</div>
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
									<tr>
										<th>{{ $gorras->id}}</th>
										<td>Talle#{{ $gorras->talle}}</td>
										<td>${{ $gorras->precio}}</td>
										<td><img src="../{{ $gorras->gorra}}" alt="" width="50" height="50"></td>
										@if($gorras->reversible == true)
											<td>Reversible</td>
											@else 
											<td>No reversible</td>
										@endif
	
										
									</tr>
				
								</tbody>
							</table>

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