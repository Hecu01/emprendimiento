<header class="header1" >
	<!-- Nav -->
	<a href="{{ route('betsob') }}" class="betsob">
		Betsob
	</a>

	<!-- Right Side Of Navbar -->
	<ul class="navbar-nav ms-auto mt-2" >
		<!-- Authentication Links -->

	</ul>
	<nav class="social_media" id="nav-betsob">	

		<ul id="navegar">
			<li class="menu__item"><a href="{{ route('betsob') }}"  class="menu__link">Inicio</a></li>
			<li><a href="{{ route('cofias') }}">Cofias</a></li>


			<li class="menu__item"><a href="{{ route('gorras') }}" class="menu__link">Gorras</a></li>
			{{-- <li class="menu__item"><a href="#" class="menu__link">Encargar</a></li> --}}

			
			<li class="nav-item dropdown">
				<a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					Crud
				</a>

				<div class="dropdown-menu dropdown-menu-end bg-dark" style="color: white" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('formulario-betsob') }}">
						Crear Gorra
					</a>
					<a class="dropdown-item" href="{{ route('tabla-gorras-betsob') }}">
						Tabla Gorras
					</a>
					<hr class="dropdown-divider">
					<a class="dropdown-item" href="#">
						Crear Cofia
					</a>
					<a class="dropdown-item" href="#">
						Tabla Cofias
					</a>
					<hr class="dropdown-divider">
					<a class="dropdown-item" href="{{ route('formulario-betsob') }}">
						Registrar venta
					</a>
					<a class="dropdown-item" href="{{ route('formulario-betsob') }}">
						Registrar Cliente
					</a>


				</div>
			</li>
		</ul>	


	</nav>
	<div class="btn-group" id="navbar-de-mi-menu">
		
		<a href="#" style="margin-top: 13px; margin-right: 7px;">
			
			<img src="img/betsob/header arg.png" alt="argentina">
		</a>			

		
		<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
			Admin: <span class="visually-hidden" style="text-transform: capitalize">{{ Auth::user()->name }}</span>
		</button>
		<ul class="dropdown-menu">
		  	<li>
				<a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar Sesion') }}</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			</li>
			<li><a class="dropdown-item" href="#">Another action</a></li>
			<li><a class="dropdown-item" href="#">Something else here</a></li>
			<li><hr class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="#">Separated link</a></li>
		</ul>

	</div>
</header>














