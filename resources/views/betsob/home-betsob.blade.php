@extends('layouts.plantilla-betsob')


@section('section-principal-betsob')

    <!-- Section -->		
	<section class="section-1-main">
		<!--izquierda-->
		<div class="right">
			<div class="bienvenida" style="padding:20px;">
				<h1 id="palabra-betsob">BETSOB</h1>
				<h1 style="border-bottom: 1px solid rgb(0,0,255, 0.4); padding-bottom: 7px">Gorras y cofias para soldadores.</h1>
				
				<div class="contenedor-bienvenida d-flex justify-content-center" style=" padding-top: 7px">
					<a href="{{  route('gorras') }}" class="btn btn-primary">Gorras</a>
					<a href=" {{  route('cofias') }} " class="btn btn-primary ml-1 mr-1">Cofias</a>
					<a href="#" class="btn btn-primary">Contacto</a>
				</div>
			</div>
		</div>
		<div class="left">

		</div>
		<!-- Derecha -->

	</section>
@endsection