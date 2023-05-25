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
					<article>
						<h1>Talle#35-36</h1>	
						<div class="contenedor-imagen-article" >
				
							<img src="img/betsob/gorras/articulo1.jpg" alt="Gorra" class="imagen" data-bs-toggle="modal"  data-bs-target="#myModal" type="button">
							
							<span class="reversible reversible2 gorra">
								$3000 AR
							</span>
						</div>				
						<div class="detalles">
							<button class="btn btn-success">
								Contactar <i class="fab fa-whatsapp"></i>
							</button>
							<!-- Button to Open the Modal -->
							<button type="button" class="btn btn-primary ml-1" data-bs-toggle="modal" data-bs-target="#myModal">
								<i class="fa-solid fa-magnifying-glass-plus"></i>
							</button>

						</div>
					</article>

					<article>
						<h1>Talle#39-40</h1>
						<div class="contenedor-imagen-article">
							<img src="img/betsob/gorras/articulo2.jpg" alt="Gorra" class="imagen">
							<span class="reversible rev-gorra">
								REVERSIBLE
							</span>
							<span class="reversible reversible2 gorra">
								$1900 AR
							</span>
						</div>
						<div class="detalles">
							<button class="btn btn-success">
								Contactar <i class="fab fa-whatsapp"></i>
							</button>
							<!-- Button to Open the Modal -->
							<button type="button" class="btn btn-primary ml-1" data-bs-toggle="modal" data-bs-target="#myModal2">
								<i class="fa-solid fa-magnifying-glass-plus"></i>
							</button>
							
							
						</div>
					</article>


					<article>
						<h1>Talle#38</h1>
						<div class="contenedor-imagen-article">
							<img src="img/betsob/gorras/articulo3.jpg" alt="Gorra" class="imagen">
						</div>
						<div class="detalles">
							<button class="btn btn-success">
								Contactar <i class="fab fa-whatsapp"></i>
							</button>
						</div>
					</article>

					<article>
						<h1>Talle#37</h1>
						<div class="contenedor-imagen-article">
							<img src="img/betsob/gorras/articulo4.jpg" alt="Gorra" class="imagen">
							<span class="reversible rev-gorra">
								REVERSIBLE
							</span>

							<span class="reversible reversible2 gorra">
								$1625 AR
							</span>
						</div>
						<div class="detalles">
							<button class="btn btn-success">
								Contactar <i class="fab fa-whatsapp"></i>
							</button>
						</div>
					</article>

					<article>
						<h1>Talle#38-39</h1>
						<div class="contenedor-imagen-article">
							<img src="img/betsob/gorras/articulo7.jpg" alt="Gorra" class="imagen">
							<span class="reversible rev-gorra">
								REVERSIBLE
							</span>

							<span class="reversible reversible2 gorra">
								$2380 AR
							</span>
						</div>
						<div class="detalles">
							<button class="btn btn-success">
								Contactar <i class="fab fa-whatsapp"></i>
							</button>
						</div>
					</article>
				</section>
			</div>
		</div>

	</section>
	

	<!-- The Modal -->
	<div class="modal" id="myModal2" >
		<div class="modal-dialog" >
			<div class="modal-content">
		
				<!-- Modal Header -->
				<div class="modal-header">
				<h4 class="modal-title">Talle#34-35</h4>
				</div>
		
				<!-- Modal body -->
				<div class="modal-body">
					<div>
						<img src="img/betsob/gorras/articulo2.jpg" alt="" style="display:block;margin: auto; width:300px">
					</div>
				</div>
		
				<!-- Modal footer -->
				<div class="modal-footer d-flex justify-content-center">
					
					<span class="reversible rev-gorra">
						REVERSIBLE
					</span>
					<span class="reversible oferta">
						OFERTA <br>
						<b>$2500</b>
					</span>
					<span class="reversible reversible2 gorra">
						$1625 AR
					</span>
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
				
				</div>
		
			</div>
		</div>
	</div>
								
	<!-- The Modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
		
				<!-- Modal Header -->
				<div class="modal-header">
				<h4 class="modal-title">Modal Heading</h4>
				</div>
		
				<!-- Modal body -->
				<div class="modal-body">
					<div>
						<img src="img/betsob/gorras/articulo1.jpg" alt="" style="display:block;margin: auto; width:300px">
					</div>
				</div>
		
				<!-- Modal footer -->
				<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
				</div>
		
			</div>
		</div>
	</div>
@endsection