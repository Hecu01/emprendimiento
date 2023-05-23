<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Albañil. Albañileria. Construcciones">
		<meta name="author" content="Valentín Urbine">
		<meta name="description" content="Perfectec. Ramon Sánchez.">
		<meta name="copyright" content="">
		<link rel="shortcut icon" href="img/betsob/header arg.png" id="fileico">

		<link rel="icon" href="favicon.ico" sizes="32x32" type="image/png">
		
		<!-- JS connect -->
		<script src="javascript/scrollreveal.js"></script>

		<!-- Bootstrap Injected -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<!-- CSS connect -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/perfectec/perfectec.css">
	
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://cdn.tailwindcss.com"></script> 
		<title>{{ isset($title) ? $title : 'Sitio Web'}}</title>
	</head>

	<body>

		
		<main class="contenedor">
			<!-- Header Portafolio Urbine01 -->
			<x-header/> 


			
			<!-- Seccion Principal -->
			<div class="principal">
				@yield('section-principal-perfectec')
			</div>

			
		</main>

		<script src="javascript/main.js"></script>
	</body>
</html>



