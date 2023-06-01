@extends('layouts.plantilla-betsob')
@section('section-principal-betsob')
	<div class="divisor-ciudad">
		<p class="pie_de_pagina pl-2 pr-2" >San Nicolás de los Arroyos, Buenos Aires.</p>
	</div>
	
	<section class="">
		
		<div class="center d-flex justify-content-center">
			<div class="articulos">
				<div class="div-h1-section-gorras" style="text-align: center;">
					<h1 >Gorras para soldadores</h1>
				</div>
				<section class="row justify-content-center col-12 articulos">

			
					@if(count($gorras) > 0)
						@foreach($gorras as $item)
							
							<article>
								@if($item->talle2 > 0 )
									<h1>Talle#{{ $item->talle1}}-{{ $item->talle2}}</h1>
								@else
									<h1>Talle#{{ $item->talle1}}</h1>
								@endif
								<div class="contenedor-imagen-article" >
									
									<style>
										img{
											transition: 0.5s all;
										}
										img:hover{
											transition: 0.5s all;
											box-shadow: 0px 0px 3px #000;
										}
									</style>
									<img src="{{ $item->gorra}}" alt="Gorra" class="imagen" data-bs-toggle="modal" data-bs-target="#modal{{ $item->id }}" type="button">
									@if($item->reversible == true)
										<span class="reversible rev-gorra">
											REVERSIBLE
										</span>
									@endif
									<span class="reversible reversible2 gorra">
										${{$item->precio}} AR
									</span>
								</div>				
								<div class="detalles">
									<button class="btn btn-success">
										Contactar <i class="fab fa-whatsapp"></i>
									</button>
									<!-- Button to Open the Modal -->
									<button type="button" class="btn btn-primary ml-1" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}">
										<i class="fa-solid fa-magnifying-glass-plus"></i>
									</button>

								</div>
							</article>

						@endforeach()
					@else
						<p style="height: 600px">No hay nada que mostrar.</p>
					@endif
			
				</section>
			</div>
		</div>

	</section>
	
	
@foreach($gorras as $item)
	
		
		<!-- The Modal -->
		<div class="modal" id="modal{{$item->id}}" >
			<div class="modal-dialog" >
				<div class="modal-content">
			
					<!-- Modal Header -->
					<div class="modal-header">
					<h4 class="modal-title">Talle#{{ $item->talle}}</h4>
					</div>
			
					<!-- Modal body -->
					<div class="modal-body">
						<div>
							<img src="{{ $item->gorra }}" alt="" style="display:block;margin: auto; width:300px">
						</div>
					</div>
			
					<!-- Modal footer -->
					<div class="modal-footer d-flex justify-content-center">
						
						<span class="reversible reversible2 gorra">
							${{ $item->precio }} AR
						</span>
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					
					</div>
			
				</div>
			</div>
		</div>
	
@endforeach()
	
@endsection

