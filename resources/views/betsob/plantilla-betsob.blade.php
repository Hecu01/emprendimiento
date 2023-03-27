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
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/betsob/styles.css">
		<link rel="stylesheet" href="css/betsob/gorra.css">
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
				@yield('section-principal-betsob')
			</div>


			<!-- Footer -->
			<footer >
				<h1>BETSOB</h1>

				<div class="informacion">
					<section class="informacion_extra">
						
						<article id="article_left">
							<h2>Info Adicional</h2>
							<details>

								<summary>¿Quienes somos?</summary>
								<h2>Betsob</h2>
								<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi praesentium id obcaecati sit quod repudiandae voluptatum eius, nobis consequuntur earum.</p>

							</details>
							<details>

								<summary>¿Qué realizamos?</summary>
								<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi praesentium id obcaecati sit quod repudiandae voluptatum eius, nobis consequuntur earum.</p>

							</details>

						</article>

						<article id="article_center">
							<h2>Catálogo</h2>
							<details>
								<ul>
									<li><a href="#"><i class="far fa-gem"></i> Ver gorras para soldadores</a></li>

									<li><a href="#"><i class="far fa-gem"></i> Ver cofias para soldadores</a></li>
								</ul>
							</details>
						</article>


						<article id="article_right">
							<h2>Comprar</h2>
							<details>
								<summary>Contactos</summary>
								<ul>
									<!-- Before responsive desing-->
									<li class="before"><a href="https://api.whatsapp.com/send?phone=5493364036241&text=Hola, quiero saber más sobre las gorras y cofias para soldadores" target="_BLANK"> <i class="fab fa-whatsapp"></i> 	+54 9 3364610643 - Mariana Ramos</a></li>
									<li class="before"><a href="https://api.whatsapp.com/send?phone=5493364036241&text=Hola, quiero saber más sobre las gorras y cofias para soldadores"> <i class="fab fa-whatsapp"></i> 	+54 9 3364610643 - Beatriz</a></li>
									<li class="before"><a href="https://www.facebook.com/Gorras-para-Soldadores-BetSob-San-Nicol%C3%A1s-Buenos-Aires-Argentina-1556529141285253"><i class="fab fa-facebook"></i>  	BETSOB || FACEBOOK</a></li>
									<!-- After responsive desing-->
									<p id="presione_contacto" class="after">Presione en algún contacto</p>
									<li class="after"><a href="https://api.whatsapp.com/send?phone=5493364036241&text=Hola, quiero saber más sobre las gorras y cofias para soldadores" target="_BLANK"> <i class="fab fa-whatsapp"></i> +54 9 3364610643</a></li>
									<li class="after"><a href="https://api.whatsapp.com/send?phone=5493364036241&text=Hola, quiero saber más sobre las gorras y cofias para soldadores"> <i class="fab fa-whatsapp"></i>+54 9 3364610643</a></li>
									<li class="after"><a href="https://www.facebook.com/Gorras-para-Soldadores-BetSob-San-Nicol%C3%A1s-Buenos-Aires-Argentina-1556529141285253"><i class="fab fa-facebook"></i>BETSOB</a></li>
								</ul>
							</details>
						</article>
					</section>
				</div>
				
				<p class="pie_de_pagina pl-2 mt-3" >{{ isset($footer) ? $footer : ''}}</p>
			</footer>
		</main>

		<script src="javascript/main.js"></script>
	</body>
</html>



