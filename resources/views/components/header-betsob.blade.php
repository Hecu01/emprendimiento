<header class="header1" >
	<!-- Nav -->
	<a href="{{ route('betsob') }}" class="betsob">
		Betsob
	</a>
	<div style="margin-top: 13px">
		<form action="" method="get" class="d-flex ">
			<input type="search" name="" placeholder="Talle, gorra, cofia." class="mr-1" style="height: 29.5px">
			<button class="btn btn-sm btn-success">Buscar</button>
		</form>
	</div>
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
			
			<img src="img/betsob/header arg.png" alt="argentina">
		</a>			
	</nav>
</header>
